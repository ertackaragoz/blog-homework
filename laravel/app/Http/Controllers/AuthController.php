<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $envUser = env('ADMIN_USERNAME');
        $envPass = env('ADMIN_PASSWORD');

        if ($request->username === $envUser && $request->password === $envPass) {
            session(['admin_logged_in' => true]);
            return redirect()->route('home');
        }

        return back()->withErrors(['hata' => 'Kullanıcı adı veya şifre hatalı']);
    }
}
