<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Str;
use Auth;
use App\Models\User;
use Mail;
use App\Mail\ForgotPasswordMail;

class AuthController extends Controller
{
    public function Login(Request $request){
       
        return view('auth.login');
    }

    public function forgot(){
        return view('auth.forgot');
    }

    public function login_post(Request $request){ 
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],true)){
            if (Auth::User()->is_role == '1') {
            return redirect()->intended('admin/dashboard');
            } else {
             return redirect()->back()->with('error', 'Please Enter the correct credentials');
            }

        }else{
            return redirect()->back()->with('error', 'Please Enter the correct credentials');
        }
    }

    public function logout(){
        Auth::logout();
            return redirect(url('/'));
    }

    // public function forgot_post(Request $request){
    //     $count = User::where('email', '=', $request->email)->count();
    //     if($count > 0){
    //         $user = User::where('email', '=', $request->email)->first();
    //         $user->remember_token = Str::random(50);
    //         $user->save();

    //         Mail::to($user->email)->send(new ForgotPasswordMail($user));

    //         return redirect()->back()->with('success','Password has been reset check your email or Spam folder');
    //     }
    //     else{
    //         return redirect()->back()->withInput()->with('error', 'Email not found in the system');
    //     }
    // }


}
