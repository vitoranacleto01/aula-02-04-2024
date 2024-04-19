<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(!Auth::attempt($credentials)) {
            return back()->withErrors('Credenciais inválidas, tente novamente.');
        }

        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    }
}
