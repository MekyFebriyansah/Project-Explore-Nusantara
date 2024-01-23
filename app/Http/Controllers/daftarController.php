<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class daftarController extends Controller
{
    public function pindah_daftar()
    {
        return view('daftar_masuk.daftar');
    }

    public function daftarAkun(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $sudahDaftar = User::where('email', $request->input('email'))->first();
        if ($sudahDaftar) {
            return redirect('/daftar')->with('daftarSama', true);
        }

        $user = User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        
        Profil::create([
            'email' => $user->email,
        ]);

        return redirect('/masuk')->with('sukses', true);
    }
}
