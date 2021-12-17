<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect('admin');
        }elseif(Auth::guard('user')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect('home');
        }

        return redirect('login');
    }

    public function logout(Request $request)
    {
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        elseif(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
        }
        return redirect('/');
    }

    public function register()
    {
        return view('user.register');
    }

    public function saveregister(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(40),
        ]);
        /* INSERT INTO users(name, email, password, remember_token) 
        VALUES($request->name, $request->email, $request->password, str::random(40) );*/

        return redirect('home');
    }


}
