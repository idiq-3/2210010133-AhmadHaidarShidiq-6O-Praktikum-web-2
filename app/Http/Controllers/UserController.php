<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function printPdf()
    {
        $users = User::get();
            $data = [
            'title' => 'Welcome To fti.uniska-bjm.ac.id',
            'date' => date('m/d/Y'),
            'users' => $users
        ];
        $pdf = PDF::loadview('mypdf',$data);
        $pdf->setPaper('A4','landscape');
        return $pdf->stream('Data User.pdf',array("attachment" =>false));
    }

    public function userExcel()
    {
        $user = User::get();
        $data = [
            'title'=>'Welcome To fti.uniska-bjm.ac.id',
            'date'=> date('m/d/y'),
            'users'=> $user
        ];
        return view('userexcel', $data);
    }
}
