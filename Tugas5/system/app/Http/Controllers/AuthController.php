<?php

namespace App\Http\Controllers;
use Auth;


class AuthController extends Controller
{
     function showLogin(){
          return view('login');
     }      
     
     function loginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
          return redirect('home')->with('success', 'Login Successful');
        }else{
            return back()->with('danger', 'Login Failed, Please check your email and password');
        }
     }

     function logout(){
         Auth::logout(); 
         return redirect('home');
     }
}