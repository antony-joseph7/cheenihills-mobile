<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CustomFormData;
use Illuminate\Http\Request;
use Str;
use App\Services\InfobipWhatsappService;


class FormDataController extends Controller
{
    //

    public function index()
    {
        if (request()->ajax()) {
            $formData = CustomFormData::select('*');

            return datatables()->of($formData)
                ->editColumn('message', function ($row) {
                    return Str::limit($row->message, 50);
                })
                ->addColumn('action', function ($row) {
                    $links = '';
                    $links .= '<a href="'.route('dashboard.form-data.show', [$row->id]).'" class="btn btn-xs btn-primary">
                              <i class="bx bx-show"></i>
                           </a>&nbsp;';

                    $links .= '<button data-href="'.route('dashboard.form-data.destroy', [$row->id]).'" class="btn btn-xs btn-danger delete_user_button">
                              <i class="bx bx-trash"></i>
                           </button>';

                    return $links;
                })

                ->make(true);
        }

        return view('dashboard.form-data.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form-data.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function show(CustomFormData $formData)
    {

        return view('dashboard.form-data.show', compact('formData'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // Validate and process the form data
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'phone' => 'required|regex:/^[0-9]{10}$/',
    //         'message' => 'required|string',
    //     ]);

    //     CustomFormData::create([
    //         'name'=>$request->input('name'),
    //         'email'=>$request->input('email'),
    //         'mobile'=>$request->input('phone'),
    //         'message'=>$request->input('message')
    //     ]);

    //     // Store or handle the contact form data
    //     // Example: Contact::create($request->all());

    //     return redirect()->route('web.contact')->with('success', 'Thank you! We’ve received your message');
    // }

    public function store(Request $request, InfobipWhatsappService $whatsapp)
    {
        // 1. Validate the form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]{10}$/',
            'message' => 'required|string',
        ]);

        // 2. Save to DB
        CustomFormData::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);

        // 3. Build WhatsApp Message
        $textMessage =
            "📩 *New Contact Form Submission*\n\n".
            '*Name:* '.$request->name."\n".
            '*Email:* '.$request->email."\n".
            '*Phone:* '.$request->phone."\n".
            '*Message:* '.$request->message;

        // 4. Your verified WhatsApp number (Infobip Free Trial)
        $receiver = '+919048996657';  // <-- PUT YOUR VERIFIED NUMBER HERE

        // 5. Send WhatsApp Message
        $whatsapp->sendTextMessage($receiver, $textMessage);

        // 6. Redirect with success
        return redirect()->route('web.contact')
            ->with('success', 'Thank you! We’ve received your message');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomFormData $formData)
    {
        if (request()->ajax()) {
            try {
                $formData->delete();

                $flashData = [
                    'success' => true,
                    'type' => 'success',
                    'message' => __('Enquiry Deleted successfully'),
                ];
            } catch (\Exception $e) {
                $flashData = [
                    'success' => false,
                    'type' => 'danger',
                    'message' => __('Something Went wrong'),
                ];
            }

            return response()->json($flashData);
        }
    }
}
