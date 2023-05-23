<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        $admin = User::first();
        if ($admin) {
            return  redirect()->route('login');
        }
        return view('admin.register');
    }

    public function auth(Request $request)
    {

        $formFields = $request->validate([
            'password' => 'required'
        ]);


        $user = User::first();
        $formFields['email'] = $user->email;
        // $formFields['email']='ilyasgrid17@gmail.com';

        if (auth()->attempt($formFields)) {
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

    public function changePwd()
    {
        return view('admin.change-password');
    }



    public function updatePwd(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $user->password = Hash::make($request->new_password);

        $admin = User::findOrFail($user->id);
        $admin->update(['password' => $user->password]);

        return redirect()->action([UserController::class, 'show']);
    }





    // public function sendVerificationCode(Request $request)
    // {
    //     $user = User::first();

    //     if (!$user) {
    //         return redirect()->back()->withErrors(['email' => 'Email not found']);
    //     }

    //     $email = $user->email;


    //     $verificationCode = rand(100000, 999999);
    //     $user->verification_code = $verificationCode;
    //     $user->save();

    //     Mail::to($email)->send(new MailNotify($verificationCode));

    //     return redirect()->action([UserController::class, 'show']);
    // }


    // public function verifyCodeForm()
    // {
    //     return view('admin.verifyCodeForm');
    // }


    // public function verificationCode(Request $request)
    // {
    //     $request->validate([
    //         'Code' => 'required',
    //     ]);

    //     $user = User::first();

    //     if ($user->verification_code == $request->Code) {
    //         dd('suiii');
    //     }

    //     return view('admin.resetpassword');
    // }


    // public function resetpasswordView()
    // {
    //     return view('admin.resetpassord');
    // }
    // public function resetpassword(Request $request)
    // {
    //     $admin = User::first();

    //     $request->validate([
    //         'new_password' => 'required|min:8',
    //     ]);


    //     $password = Hash::make($request->new_password);

    //     $admin->update(['password' => $password]);

    //     return redirect()->action([UserController::class, 'show']);
    // }
}
