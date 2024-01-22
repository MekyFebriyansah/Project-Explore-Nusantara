<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class masukController extends Controller
{
    public function pindah_masuk()
    {
        return view ('masuk');
    }

    public function masuk(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email Harus Diisi',
            'password.required'=>'Passwird Harus Diisi',
        ]);

        $infologin =[
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if (Auth::attempt($infologin)) {
            //kalau otentikasi sukses
            return 'sukses';
        } else {
            //kalau otentikasi gagal
            return 'gagal';
        }
    }
}
