<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Contracts\Auth\Guard;

class LoginController extends Controller
{
    public function login(){
        return view('dashboard.auth.login');
        
    }

    public function postLogin(AdminLoginRequest $request)
    {
        //name of fild in admin login form
        $remember_me  = $request->has('remember_me') ? true : false;

        if(auth()->Guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$remember_me)){
          return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with(['error'=>'data error']);
    }
}

