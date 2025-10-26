<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerView()
    {
        return view('auth.register');
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function registerSubmit(Request $request)
    {
        // validation rules
        //dd($request); vitorar sob dakhabe
         $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:100|min:6|confirmed',
        ]);
DB::table('users')->insert([
    'name' =>$request->name,
    'email' =>$request->email,
 
    'password' => Hash::make($request->password),


]);
return redirect()->route('login.submit');
        
    }
}
