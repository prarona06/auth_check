<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 🔹 Registration page view
    public function registerView()
    {
        return view('auth.register');
    }

    // 🔹 Login page view
    public function loginView()
    {
        return view('auth.login');
    }

    // 🔹 Registration form submit
    public function registerSubmit(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:100|confirmed',
        ]);

        // Insert user data
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to login page
        return redirect()->route('login.view')->with('success', 'Registration successful! Please login.');
    }

    // 🔹 Login form submit
    public function loginSubmit(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email|max:100',
            'password' => 'required|string|min:6',
        ]);

        // Find user by email
        $user = DB::table('users')->where('email', $request->email)->first();

        // Verify password
        if ($user && Hash::check($request->password, $user->password)) {
            // Store user info in session
            $request->session()->put('user', [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ]);

            return redirect()->route('home');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    // 🔹 Home page
    public function index()
    {
        return view('auth.home');
    }
}
