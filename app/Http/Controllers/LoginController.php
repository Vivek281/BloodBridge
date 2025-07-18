<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;


class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' =>'required|min:6'
        ]);
        $user = User::where('email', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                Auth::login($user);

                switch($user->user_type){
                    case 'admin':
                        return redirect()->intended(route('admin'));

                    default:
                        return redirect()->intended(route('frontend.index'));
                }
            }
        }
        return redirect()->back();

    }

    public function dashboard(){
        return view('backend.dashboard');
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('login.form');
            //session_flush();
            //session_destroy();
        }
    }
}
