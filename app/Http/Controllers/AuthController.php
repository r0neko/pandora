<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_page() {
        return view('auth.login');
    }

    public function register_page() {
        return view('auth.register');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => ['required', 'exists:users,name'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember') && $request->get('remember', false);

        if (Auth::attempt([
            'name' => $credentials['username'], 
            'password' => $credentials['password']
        ], $remember)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
 
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function register(Request $request) {
        $credentials = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'username' => ['required', 'unique:users,name'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
            'password_repeat' => ['required', 'same:password'],
        ]);
 
        $user = new \App\Models\User();
        $user->name = $credentials['username'];
        $user->password_hash = Hash::make($credentials['password']);
        $user->email = $credentials['email'];
        $user->first_name = $credentials['first_name'];
        $user->last_name = $credentials['last_name'];
        $user->save();

        $user->group("Friends")->add_user(\App\Models\User::find(1));
 
        return redirect()->route('login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
