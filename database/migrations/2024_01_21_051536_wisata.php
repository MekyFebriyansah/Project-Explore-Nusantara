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
        Schema::create('tbl_wisata', function (Blueprint $table) {
            $table->id('id_wisata');
            $table->string('judul_wisata');
            $table->text('deskripsi_wisata');
            $table->text('gambar_wisata1');
            $table->text('gambar_wisata2');
            $table->text('gambar_wisata3');
            $table->text('gambar_wisata4');
            $table->text('gambar_wisata5');
            $table->text('gambar_wisata6');
            $table->timestamps();
            $table->integer('lihat_wisata');
            $table->text('link_gmaps_wisata');
            $table->string('tempat_wisata');
            $table->string('email');
            $table->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_wisata');
    }
};
