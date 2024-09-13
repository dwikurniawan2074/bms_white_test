<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RbacUser;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authentication(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = RbacUser::where('username', $request->username)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return redirect()->intended('/dashboard');
            }

            if ($user->password === md5($request->password)) {
                $user->password = Hash::make($request->password);
                $user->save();

                return redirect()->intended('/dashboard');
            }
        }

        return back()->withErrors([
            'login' => 'Invalid username or password',
        ]);
    }
}
