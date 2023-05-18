<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('admin.dashboard');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function storeAdmin(Request $request)
    {
        // Validate the request data
        $formFields = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        // Redirect to the dashboard or any other desired route
        return redirect()->route('dashboard');
    }

    public function login()
    {
        return view('admin.login');
    }
    public function register()
    {
        return view('admin.register');
    }

    public function auth(Request $request) {

        $formFields = $request->validate([
            'password' => 'required'
        ]);

        
        $user= User::first();
        $formFields['email']=$user->email;
        // $formFields['email']='ilyasgrid17@gmail.com';

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors(['password' => 'Invalid password'])->onlyInput('password');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
