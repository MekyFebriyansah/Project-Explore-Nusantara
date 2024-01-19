<?php

use App\Http\Controllers\daftarController;
use App\Http\Controllers\masukController;
use App\Http\Controllers\tambahBlogController;
use App\Http\Controllers\detailBlogController;
use App\Http\Controllers\blogAndaController;
use App\Http\Controllers\semuaBlogController;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\semuawisataController;
use App\Http\Controllers\wisataandaController;
use App\Http\Controllers\tambahwisataController;
use App\Http\Controllers\detailwisataController;
use App\Http\Controllers\profilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', [daftarController::class, 'pindah_daftar']);
Route::post('/daftar', [daftarController::class, 'daftar_akun']) -> name('daftar.post');

Route::get('/masuk', [masukController::class, 'pindah_masuk'] );
Route::post('/masuk', [masukController::class, 'masuk_akun'] )->name('masuk.post');

Route::get('/tambahBlog', [tambahBlogController::class,'pindah_tambahBlog']);

Route::get('/detailBlog', [detailBlogController::class,'pindah_detailBlog']);

Route::get('/blogAnda', [blogAndaController::class,'pindah_blogAnda']);

Route::get('/semuaBlog', [semuaBlogController::class, 'pindah_semuaBlog']);

<<<<<<< HEAD
Route::get('/homepage', [homePageController::class,'pindah_homepage']);
=======
Route::get('homepage', [homePageController::class,'pindah_homepage']);

Route::get('semuawisata', [semuawisataController::class,'pindah_semuawisata']);

Route::get('wisataanda', [wisataandaController::class,'pindah_wisataanda']);

Route::get('tambahwisata', [tambahwisataController::class,'pindah_tambahwisata']);

Route::get('detailwisata', [detailwisataController::class,'pindah_detailwisata']);

Route::get('profil', [profilController::class,'pindah_profil']);
>>>>>>> 806ae1db4b24841520834d8aad8f0a54bd7315d6
