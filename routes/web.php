<?php

use App\Http\Controllers\daftarController;
use App\Http\Controllers\masukController;
use App\Http\Controllers\tambahBlogController;
use App\Http\Controllers\detailBlogController;
use App\Http\Controllers\blogAndaController;
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

Route::get('/masuk', [masukController::class, 'pindah_masuk'] );

Route::get('/tambahBlog', [tambahBlogController::class,'pindah_tambahBlog']);

Route::get('/detailBlog', [detailBlogController::class,'pindah_detailBlog']);

Route::get('/blogAnda', [blogAndaController::class,'pindah_blogAnda']);
