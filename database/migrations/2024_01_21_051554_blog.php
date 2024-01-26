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
        Schema::create('tbl_blog', function (Blueprint $table) {
            $table->id('id_blog');
            $table->string('judul_blog');
            $table->text('deskripsi_blog');
            $table->text('gambar_blog1');
            $table->text('gambar_blog2')->nullable();
            $table->text('gambar_blog3')->nullable();
            $table->text('gambar_blog4')->nullable();
            $table->text('gambar_blog5')->nullable();
            $table->text('gambar_blog6')->nullable();
            $table->timestamps();
            $table->integer('lihat_blog');
            $table->string('email');
            $table->foreign('email')->references('email')->on('users');
            $table->text('link_gmaps_blog');
            $table->string('tempat_blog');
            $table->text('tentang_blog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_blog');
    }
};
