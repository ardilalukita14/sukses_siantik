<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPasienLamaController extends Controller
{
    public function post_form_old_pasien(Request $request)
    {
        dd($request->all());
    }
}
