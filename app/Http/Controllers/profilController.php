<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class profilController extends Controller
{
    public function pindah_profil()
    {
        $profil = Profil::first();
        return view('profil', compact('profil'));
    }

    public function updateProfil(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'alamat' => 'nullable',
        'tempat_lahir' => 'nullable',
        'tanggal_lahir' => 'nullable|date',
        'email' => 'required|email',
        'nomor_hp' => 'nullable',
        'gambar_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $profil = Profil::first(); 
    $profil->nama = $request->nama;
    $profil->alamat = $request->alamat;
    $profil->tempat_lahir = $request->tempat_lahir;
    $profil->tanggal_lahir = $request->tanggal_lahir;
    $profil->email = $request->email;
    $profil->nomor_hp = $request->nomor_hp;

    if ($request->hasFile('gambar_profil')) {
        if ($profil->foto_profil) {
            Storage::delete($profil->foto_profil);
        }

        $image = $request->file('gambar_profil');
        $imageName = $image->store('public/img');

        $profil->foto_profil = $imageName;
    }

    $profil->save();

    return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
}
}
