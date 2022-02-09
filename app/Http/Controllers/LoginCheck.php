<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginCheck extends Controller
{
    function login_page() {
        if (session('UserHasLogIn')) {
            return redirect('/');
        }

        return view('login');
    }

    function loginChk() {

        if($user = User::where('email', request('email'))->first()){
            if(Hash::check(request('password'), $user->password)) {
                session(['UserHasLogIn' => 1]);
                return redirect('/')->with('success','User Login Successfully');
            } else {
                return redirect('login')->with('fail','Oops! Wrong Email or Password');
            }
        } else {
            return redirect('login')->with('fail','Oops! Wrong Email or Password');
        }
    }

    function logout() {
        session(['UserHasLogIn' => 0]);
        return redirect('login')->with('success','User Logout Successfully');
    }

}
