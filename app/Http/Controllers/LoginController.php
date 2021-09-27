<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('datatables');
        }else{
            return view('login');
        }
    }

    public function action(Request $request)
    {
        $data = [
            'nama_pemilik' => $request->input('nama_pemilik'),
            'jenis_hewan' => $request->input('jenis_hewan'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('datatables');
        }else{
            Session::flash('error', 'Nama pemilik atau jenis hewan tidak ditemukan');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

}