<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Response;

class daftarController extends Controller
{
    public function pindah_daftar()
    {
        return view ('daftar');
    }

    public function daftar_akun(Request $request)
    {
        try {
            $validasi = $request -> validate ([
                'email' => 'required|email|unique:users|max:255',
                'password' => 'required|string|min:8|confirmed',
                'konfirmasiPassword' => 'required|string|min:8',
            ]);

            $simpan = User::create([
                'email' => $validasi['email'],
                'password' => bcrypt($validasi['password']),
            ]);

            return Response::json(['status' => 'sukses', 'pesan' => 'Pendafatan berhasil! Silahkan masuk.']);
        } catch (\Exception $error) {
            return Response::json(['status' => 'gagal', 'pesan' => 'Pendaftaran gagal. Silahkan coba daftar lagi.']);
        }
    }
}
