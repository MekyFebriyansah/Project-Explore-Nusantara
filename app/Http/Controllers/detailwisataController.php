<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Carbon\Carbon;
use Illuminate\Http\Request;

class detailwisataController extends Controller
{
    public function pindah_detailwisata($id)
    {
        Carbon::setLocale('id');
        $wisata = wisata::findOrFail($id);

        $wisata->increment('lihat_wisata');

        return view ('wisata.detailwisata',  ['wisata' => $wisata]);
    }
}
