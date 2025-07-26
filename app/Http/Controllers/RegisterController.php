<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User; 

class RegisterController extends Controller
{
    public function signupForm(){
        return view("frontend.signup.form");
    }



    public function register(Request $request) {
        $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users',
                'role' => 'required|string|in:donor,recipient',
                'blood_group' => 'required|string|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
                'password' => 'required|confirmed|min:6 ',
                'phone' => 'required|digits:10',
                'location' => 'required|string',
            ]);

            // Create user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'blood_group' => $request->blood_group,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'location' => $request->location,
                'user_type' => 'user', // default role
            ]);

            auth()->login($user); // auto login after registration

            return redirect()->route('frontend.index')->with('registration_success', 'Registration Successful!');

    }
}
