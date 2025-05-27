<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Menampilkan halaman dashboard.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function dashboard(Request $request)
    {
        return view('dashboard');
    }

    /**
     * Menampilkan daftar semua user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function users(Request $request)
    {
        $users = User::all(); // Lebih baik menggunakan all() jika tidak ada filter
        return view('users', compact('users'));
    }
}
