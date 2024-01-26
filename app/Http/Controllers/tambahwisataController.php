<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class tambahwisataController extends Controller
{
    public function pindah_tambahwisata()
    {
        $list = $this->listWisata();
        return view ('wisata.tambahwisata', $list);
    }

    public function listWisata()
    {
        $provinsiOptions = ['Nanggroe Aceh Darussalam', 'Sumatera Utara', 'Sumatra Selatan', 'Sumatra Barat', 'Bengkulu', 'Riau', 'Kepulauan Riau',
        'Jambi', 'Lampung', 'Bangka Belitung', 'Kalimantan Barat', 'Kalimantan Timur', 'Kalimantan Selatan', 'Kalimantan Tengah', 'Banten', 'DKI Jakarta', 
        'Jawa Barat', 'Jawa Tengah', 'Daerah Istimewa Yogyakarta', 'Jawa Timur', 'Bali', 'Nusa Tenggara Timur', 'Nusa Tenggara Barat', 'Gorontalo', 'Sulawesi Barat',
        'Sulawesi Tengah', 'Sulawesi Utara', 'Sulawesi Tenggara', 'Sulawesi Selatan', 'Maluku Utara', 'Maluku', 'Papua Barat', 'Papua', 'Papua Tengah', 'Papua Pegunungan',
        'Papua Selatan', 'Papua Barat Daya'];
        return ['provinsiOptions' => $provinsiOptions];
    }

    public function tambahWisata(Request $request)
    {
        $gambarPath = $request->file('gambar_wisata')->store('public/gambar_wisata');
        $gambarUrl = asset(Storage::url($gambarPath));

        wisata::create([
            'judul_wisata' => $request->judul_wisata,
            'tempat_wisata' => $request->tempat_wisata,
            'link_gmaps_wisata' => $request->link_gmaps_wisata,
            'deskripsi_wisata' => $request->deskripsi_wisata,
            'gambar_wisata1' => $gambarUrl,
            'email' => auth()->user()->email,
            'lihat_wisata' => 0,
        ]);        

        return redirect('/wisataAnda')->with('sukses', true);
    }
}
