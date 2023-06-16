<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class JobController extends Controller
{
    public function signin()
    {
        return view('signin');
    }
    public function signup()
    {
        return view('signup');
    }
    public function applyform()
    {
        return view('applyform');
    }

    public function employeedash()
    {
        return view('employeedash');
    }
    public function employerdash()
    {
        return view('employerdash');
    }
    public function admindash()
    {
        return view('admindash');
    }
    public function index()
    {
        return view('index');
    }
    public function signupstore(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:user',
            'username' => 'required|unique:user',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:Employee,Employer',
        ], [
            'email.unique' => 'The email has already been taken.',
            'username.unique' => 'The username has already been taken.',
        ]);

        // Create a new user
        $user = new User();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->role = $request->role;
        $user->status = $request->role === 'Employee' ? 1 : 0;
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect to the index page or any other desired page
        return redirect()->route('signin');
    }


    public function signinprocess(Request $request)
    {   
     
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
                $user = Auth::user();
            
            if ($user->status == 0) {
                return back()->withErrors([
                    'is_approved' => 'User not approved.',
                ]);
            }
            $role = $user->role;

            if ($role === 'Admin') {
                return redirect()->intended('admindash');
            } elseif ($role === 'Employer') {
                return redirect()->intended('employerdash');
            } elseif ($role === 'Employee') {
                return redirect()->intended('employeedash');
            }

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    
       
        }
}
