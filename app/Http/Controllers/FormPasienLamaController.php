<?php

namespace App\Http\Controllers;
use App\Models\Daftar;
use App\Models\Dokter;
use Illuminate\Http\Request;

class FormPasienLamaController extends Controller
{
    public function form_old_pasien()
    {
        return view('form_basics');
    }

}
