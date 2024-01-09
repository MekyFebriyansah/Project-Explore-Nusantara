<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarController extends Controller
{
    public function pindah_daftar()
    {
        return view ('daftar');
    }
}
