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
        Schema::create('tbl_blog', function (Blueprint $tabel) {
            $tabel->id('id_blog)');
            $tabel->string('judul_blog');
            $tabel->text('deskripsi_blog');
            $tabel->text('gambar_blog1');
            $tabel->text('gambar_blog2');
            $tabel->text('gambar_blog3');
            $tabel->text('gambar_blog4');
            $tabel->text('gambar_blog5');
            $tabel->text('gambar_blog6');
            $tabel->timestamps();
            $tabel->integer('lihat_blog');
            $tabel->foreign('email')->references('email')->on('users');
            $tabel->text('link_gmaps_blog');
            $tabel->string('tempat_blog');
            $tabel->text('tentang_blog');
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
