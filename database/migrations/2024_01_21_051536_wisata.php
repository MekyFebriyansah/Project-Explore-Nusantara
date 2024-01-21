<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_wisata', function (Blueprint $tabel) {
            $tabel->id('id_wisata)');
            $tabel->string('judul_wisata');
            $tabel->text('deskripsi_wisata');
            $tabel->text('gambar_wisata1');
            $tabel->text('gambar_wisata2');
            $tabel->text('gambar_wisata3');
            $tabel->text('gambar_wisata4');
            $tabel->text('gambar_wisata5');
            $tabel->text('gambar_wisata6');
            $tabel->timestamps();
            $tabel->integer('lihat_wisata');
            $tabel->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
