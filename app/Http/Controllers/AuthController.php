<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function registerSubmit(UserRegisterRequest $request)
    {
        // Validation
        $request->validated();
$user =new User();
$user->name =$request->name;
$user->email =$request->email;
$user->password =Hash::make($request->password);
$user->save();


        // Insert user data
       /* DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);*/

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
            Auth::loginUsingId($user->id);

            return redirect()->route('home');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    // 🔹 Home page
    public function index()
    {
      $user =User::all(); //=>users tabler er moddha joto data acha sob niye aso all function er maddhome.
     // $user =User::get();=>same tule niye asa
     //$user =User::first();=>prothom ta asbe
     //$user =User::find(3);=>jekono akta ante chaile
     //$user =User::where('id',3)->orWhere('id',4)->get();=>jodi sudhu 3 thaka 3 ke anbe jodi sudhu 4 thaka 4 ke anbe
     //$user =User::where('id',3)->Where('role','admin')->get();=>id 3 o hote hbe admin o hote hbe
     //$user =User::where('id',3)->where('id',4); //id 3 and id 4 hote hbe

        return view('auth.home');
    }

    //logout

   /* public function logout(Request $request)
    {
        Auth::logout();
$request->session()->forget('user');
return redirect()->route('login.view');
    }*/

    public function logout(Request $request)
{
    // Auth সিস্টেম থেকে ইউজারকে লগআউট করা
    Auth::logout();

    // সেশন পুরোপুরি ইনভ্যালিড করা
    $request->session()->invalidate();

    // নতুন CSRF টোকেন তৈরি করা
    $request->session()->regenerateToken();

    // লগইন পেজে রিডাইরেক্ট করা
    return redirect()->route('login.view')->with('success', 'You have been logged out successfully.');
}

}
