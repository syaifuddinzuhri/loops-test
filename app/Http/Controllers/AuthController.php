<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home.index');
        }
        Session::flash('error', "Email or password invalid");
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.showLogin');
    }

    public function showSignup()
    {
        return view('auth.signup');
    }

    public function signup(SignupRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Session::flash('success', "Sign up successfully");
        return redirect()->route('auth.showLogin');
    }
}
