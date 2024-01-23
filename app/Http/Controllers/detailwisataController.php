<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailwisataController extends Controller
{
    public function pindah_detailwisata()
    {
        return view ('wisata.detailwisata');
    }
}
