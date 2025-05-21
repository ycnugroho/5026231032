<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

//function
Route::get('/', function () {
    return view('welcome');
});

// Kumpulan Tugas
Route::get('/5026231032', function () {
    return view('frontend');
});

// Halo page
Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

// Blog page
Route::get('blog', function () {
	return view('blog');
});

// Page helloworld
Route::get('hello',[Coba::class,'helloworld']);


// Tugas Bootstrap1
Route::get('/bootstrap1', function () {
    return view('bootstrap1');
});


// Tugas Bootstrap2
Route::get('/bootstrap2', function () {
    return view('bootstrap2');
});

// Tugas Pertama
Route::get('/first', function () {
    return view('first');
});

// Tugas Javascript 1
Route::get('/js1', function () {
    return view('js1');
});

// Tugas Javascript 2
Route::get('/js2', function () {
    return view('js2');
});

// Tugas Linktree - welovedhonda
Route::get('/linktree-honda', function () {
    return view('linktree-honda');
});

// Tugas Test
Route::get('/test', function () {
    return view('test');
});

// Page Index
Route::get('/index', function () {
    return view('index');
});

Route::get('dosen',[Coba::class,'index']);

Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

Route::get('/formulir', [PegawaiController::class,'formulir']); //halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class,'proses']); //action form

Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);
