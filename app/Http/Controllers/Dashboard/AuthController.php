<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function login()
    {

        return view('dashboard.auth.login');
    }


    public function doLogin(Request $request)
    {

        User::updateOrCreate([
            'email' => 'cheenihills99@gmail.com',
        ], [
            'name' => 'Cheeni Hills Resorts',
            'password' => \Hash::make('Cheenihills@2025#')
        ]);
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

        // Authentication failed...
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }



    public function logout()
    {
        auth()->logout();
        return redirect()->route('dashboard.login');
    }
}
