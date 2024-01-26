<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;

class tambahBlogController extends Controller
{
    public function pindah_tambahBlog() 
    {
        $list = $this->listBlog();
        return view("blog.tambahBlog", $list);
    }

    public function listBlog()
    {
        $provinsiOptions = ['Nanggroe Aceh Darussalam', 'Sumatera Utara', 'Sumatra Selatan', 'Sumatra Barat', 'Bengkulu', 'Riau', 'Kepulauan Riau',
        'Jambi', 'Lampung', 'Bangka Belitung', 'Kalimantan Barat', 'Kalimantan Timur', 'Kalimantan Selatan', 'Kalimantan Tengah', 'Banten', 'DKI Jakarta', 
        'Jawa Barat', 'Jawa Tengah', 'Daerah Istimewa Yogyakarta', 'Jawa Timur', 'Bali', 'Nusa Tenggara Timur', 'Nusa Tenggara Barat', 'Gorontalo', 'Sulawesi Barat',
        'Sulawesi Tengah', 'Sulawesi Utara', 'Sulawesi Tenggara', 'Sulawesi Selatan', 'Maluku Utara', 'Maluku', 'Papua Barat', 'Papua', 'Papua Tengah', 'Papua Pegunungan',
        'Papua Selatan', 'Papua Barat Daya'];
        $tentangOptions = ['Wisata', 'Makanan', 'Hiburan'];

        return [
            'provinsiOptions' => $provinsiOptions,
            'tentangOptions' => $tentangOptions,
        ];
    }

    public function tambahBlog(Request $request)
    {
        $gambarPath = $request->file('gambar_blog')->store('public/gambar_blog');
        $gambarUrl = asset(Storage::url($gambarPath));

        Blog::create([
            'judul_blog' => $request->judul_blog,
            'tempat_blog' => $request->tempat_blog,
            'link_gmaps_blog' => $request->link_gmaps_blog,
            'tentang_blog' => $request->tentang_blog,
            'deskripsi_blog' => $request->deskripsi_blog,
            'gambar_blog1' => $gambarUrl,
            'email' => auth()->user()->email,
            'lihat_blog' => 0,
        ]);        

        return redirect('/blogAnda')->with('sukses', true);
    }
}
