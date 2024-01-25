<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string,>
     */

     protected $table = 'tbl_wisata';
     protected $primaryKey = 'id_wisata';

    protected $fillable = [
        'id_wisata',
        'judul_wisata',
        'deskripsi_wisata',
        'gambar_wisata1',
        'gambar_wisata2',
        'gambar_wisata3',
        'gambar_wisata4',
        'gambar_wisata5',
        'gambar_wisata6',
        '',
        'lihat_wisata',
        'email',
        'link_gmaps_wisata',
        'tempat_wisata',
    ];
    public function profil()
    {
        return $this->belongsTo(Profil::class, 'email', 'email');
    }
}
