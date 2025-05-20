<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;

//function
Route::get('/', function () {
    return view('frontend');
});

Route::get('/5026231032', function () {
    return view('frontend');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello',[Coba::class,'helloworld']);

Route::get('/bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('/bootstrap2', function () {
    return view('bootstrap2');
});

Route::get('/first', function () {
    return view('first');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/linktree-honda', function () {
    return view('linktree-honda');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/index', function () {
    return view('index');
});



