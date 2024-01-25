<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    daftarController,
    keluarController,
    masukController,
    tambahBlogController,
    detailBlogController,
    blogAndaController,
    semuaBlogController,
    homePageController,
    semuawisataController,
    wisataandaController,
    tambahwisataController,
    detailwisataController,
    profilController,
};

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function () {
    Route::get('/daftar', [daftarController::class, 'pindah_daftar']);
    Route::post('/daftar', [daftarController::class, 'daftarAkun']);
    
    Route::get('/masuk', [masukController::class, 'pindah_masuk']);
    Route::post('/masuk', [masukController::class, 'masuk']);

    Route::get('/tambahBlog', [tambahBlogController::class, 'pindah_tambahBlog']);

    Route::get('/detailBlog/{id}', [detailBlogController::class, 'pindah_detailBlog']);

    Route::get('/blogAnda', [blogAndaController::class, 'pindah_blogAnda']);

    Route::get('/semuaBlog', [semuaBlogController::class, 'pindah_semuaBlog']);

    Route::get('/homepage', [homePageController::class, 'pindah_homepage']);

    Route::get('/semuaWisata', [semuawisataController::class, 'pindah_semuawisata']);

    Route::get('/wisataAnda', [wisataandaController::class, 'pindah_wisataanda']);

    Route::get('/tambahWisata', [tambahwisataController::class, 'pindah_tambahwisata']);

    Route::get('/detailwisata', [detailwisataController::class, 'pindah_detailwisata']);

    Route::get('profil', [profilController::class, 'pindah_profil']);
    Route::post('/update-profil', [profilController::class, 'updateProfil']);

    Route::get('/keluar', [keluarController::class, 'keluar']);
});
