<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class masukController extends Controller
{
    public function pindah_masuk()
    {
        return view('daftar_masuk.masuk');
    }

    public function masuk(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Session::flash('berhasilMasuk', true);
            return redirect('/homepage');
        } else {
            Session::flash('error', true);
            return back()->withErrors(['email' => 'Email tidak terdaftar!']);
        }
    }
}
