<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;
class semuawisataController extends Controller
{
    public function pindah_semuawisata()
    {
        $wisatas = wisata::all();

        return view ('wisata.semuawisata' , ['wisatas' => $wisatas]);
    }
}
