<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function pindah_profil()
    {
        return view ('profil');
    }
}
