<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Tampilkan halaman login atau redirect jika sudah login
     */
    public function login()
    {
        
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('aut.login');
        }
    }

    /**
     * Proses login
     */
    public function actionlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('home');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    /**
     * Logout dan redirect ke halaman login
     */
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
