<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RbacUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('login');
    }

    public function authentication(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $user = RbacUser::where('username', $request->username)->first();
        

        if ($user && $user->validatePassword($password)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'login' => 'Invalid username or password',
        ]);
    }

    protected function checkMd5Password($password, $hashedPassword)
    {
        return md5($password) === $hashedPassword;
    }
}
