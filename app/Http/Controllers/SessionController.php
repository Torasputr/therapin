<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index() {
        return view('login');
    }
    function login(Request $request) {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email must be filled',
            'password.required' => 'Password must be filled',
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            return redirect('/')->withSuccess('Login Successfull');
        }
        else {
            return redirect('/login')->withErrors('Invalid Email or Password');
        }
    }
    function logout() {
        Auth::logout();
        return redirect('/')->withSuccess('Logout Successfull');
    }

    function register() {
        return view('register');
    }
    function create(Request $request) {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'Name must be filled',
            'email.required' => 'Email must be filled',
            'email.email' => 'Email must be valid',
            'email.unique' => 'Email has been used before',
            'password.required' => 'Password must be filled',
            'password.min' => 'Password must be Minimum 8 Characters',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            return redirect('/')->withSuccess('success', Auth::user()->name);
        }
        else {
            return redirect('/login')->withErrors('Invalid Email or Password');
        }
    }
}
