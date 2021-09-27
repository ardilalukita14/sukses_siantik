<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPasienBaruController extends Controller
{
    
    public function form_new_pasien()
    {
        return view('form_advanceds');
    }
}

