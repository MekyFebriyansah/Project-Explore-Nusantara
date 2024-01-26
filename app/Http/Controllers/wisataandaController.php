<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class wisataandaController extends Controller
{
    public function pindah_wisataanda()
    {
        $userEmail = Auth::user()->email;
        $wisatas = wisata::where('email', $userEmail)->get();
        return view ('wisata.wisataanda', ['wisatas' => $wisatas]);
    }
}
