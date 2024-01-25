<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class wisataandaController extends Controller
{
    public function pindah_wisataanda()
    {
        $userEmail = Auth::user()->email;
        $wisatas = masukController::where('email', $userEmail)->get();
        return view ('wisata.wisataanda', ['wisatas' => $wisatas]);
    }
}
