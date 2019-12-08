<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{

    public function loginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|exists:admins,email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credentials, (bool) $request->remember)) {
            return redirect()->intended();
        }
    }
    public function showSignUp()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        // validate request data
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:admin,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);
        // save into table
        $user = Admin::create([
            'nama' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        // autologin
        Auth::loginUsingId($user->id);
        // redirect to login page
        return redirect()->intended();
    }
    public function logout()
    {
        Auth::logout();
    }
}
