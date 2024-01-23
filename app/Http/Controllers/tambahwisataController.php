<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tambahwisataController extends Controller
{
    public function pindah_tambahwisata()
    {
        return view ('wisata.tambahwisata');
    }
}
