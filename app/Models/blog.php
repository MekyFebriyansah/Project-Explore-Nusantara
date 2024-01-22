<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string,>
     */

     protected $fillable = [
        'id_blog',
        'judul_blog',
        'deskripsi_blog',
        'gambar_blog1',
        'gambar_blog2',
        'gambar_blog3',
        'gambar_blog4',
        'gambar_blog5',
        'gambar_blog6',
        '',
        'lihat_blog',
        'email',
        'link_gmaps_blog',
        'tempat_blog',
        'tentang_blog',
    ];
}
