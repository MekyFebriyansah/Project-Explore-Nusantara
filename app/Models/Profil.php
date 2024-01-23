<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $table = 'profil';

    protected $fillable = [
        'email',
        'nama',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'nomor_hp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
