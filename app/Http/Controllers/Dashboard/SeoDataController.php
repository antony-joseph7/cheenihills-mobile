<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SeoData;
use Illuminate\Http\Request;

class SeoDataController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            $seoData = SeoData::select('*');
            return datatables()->of($seoData)
                ->addColumn('action', function ($row) {
                    $links = '';
                        $links .= '<a href="' . route('dashboard.seo-data.edit', [$row->id]) . '" class="btn btn-xs btn-primary"><i class="fas fa-pencil-alt mr-1"></i> Edit</a>&nbsp;';

                        $links .= '<button data-href="' . route('dashboard.seo-data.destroy', [$row->id]) . '" class="btn btn-xs btn-danger delete_user_button"><i class="fas fa-trash"></i> Delete</button>';
                    return $links;
                })
                ->make(true);
        }
        return view('dashboard.seo-data.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.seo-data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->toArray());
        $request->validate([
            'page_slug' => 'required',
            'seo_title' => 'required',
        ]);

        try {
            SeoData::create([
                'page_slug' => $request->page_slug,
                'dynamic_page' => $request->dynamic_page ?? 0,
                'seo_title' => $request->seo_title,
                'seo_description' => $request->description,
                'seo_keywords' => $request->keywords,
                'og_title' => $request->seo_title,
                'og_description' => $request->description,
                'og_image' => $request->og_image,
                'og_url' => $request->og_url,
                'og_type' => $request->og_type,
                'site_name' => $request->site_name ?? 'Cheeni Group', // Use default if not provided
                'twitter_card' => $request->twitter_card,
                'twitter_title' => $request->seo_title,
                'twitter_description' => $request->twitter_description,
                'twitter_image' => $request->twitter_image,
            ]);

            $flashData = [
                'success' => true,
                'type' => 'success',
                'message' => __("SEO Data Added successfully")
            ];
            return redirect()->route('dashboard.seo-data.index')->with('flash_data', $flashData);
        } catch (\Exception $e) {
            $flashData = [
                'success' => false,
                'type' => 'danger',
                'message' => __("Something Went Wrong")
            ];
            return back()->withInput()->with('flash_data', $flashData);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SeoData $seoData)
    {

        return view('dashboard.seo-data.edit', compact('seoData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SeoData $seoData)
    {
        $request->validate([
            'page_slug' => 'required',
            'seo_title' => 'required',
        ]);

        try {
            $seoData->update([
                'page_slug' => $request->page_slug,
                'dynamic_page' => $request->dynamic_page ?? 0,
                'seo_title' => $request->seo_title,
                'seo_description' => $request->description,
                'seo_keywords' => $request->keywords,
                'og_title' => $request->seo_title,
                'og_description' => $request->description,
                'og_image' => $request->og_image,
                'og_url' => $request->og_url,
                'og_type' => $request->og_type,
                'site_name' => $request->site_name ?? 'Cheeni Group', // Use default if not provided
                'twitter_card' => $request->twitter_card,
                'twitter_title' => $request->seo_title,
                'twitter_description' => $request->twitter_description,
                'twitter_image' => $request->twitter_image,
            ]);

            $flashData = [
                'success' => true,
                'type' => 'success',
                'message' => __("SEO Data Updated successfully")
            ];
            return redirect()->route('dashboard.seo-data.index')->with('flash_data', $flashData);
        } catch (\Exception $e) {
            $flashData = [
                'success' => false,
                'type' => 'danger',
                'message' => __("Something Went Wrong")
            ];
            return back()->withInput()->with('flash_data', $flashData);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SeoData $seoData)
    {
        if (request()->ajax()) {
            try {
                $seoData->delete();

                $flashData = [
                    'success' => true,
                    'type' => 'success',
                    'message' => __("SEO Data Deleted successfully")
                ];
            } catch (\Exception $e) {
                $flashData = [
                    'success' => false,
                    'type' => 'danger',
                    'message' => __("Something Went wrong")
                ];
            }
            return response()->json($flashData);
        }
    }
}
