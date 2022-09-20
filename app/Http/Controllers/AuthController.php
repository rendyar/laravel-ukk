<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'user') {
                return redirect()->intended('user');
            }
        }
        return view('login');
    }

    public function proses(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) 
        {
            $user = Auth::user();
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            }elseif($user->level == 'user'){
                return redirect()->intended('user');
            }
            return redirect()->intended('/login');
        }
        return redirect('/login')->with('error', 'tidak bisa masuk');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
