<?php

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

Route::get('halo', function () {
	return "Halo, Selamat datang di malasngoding";
});

Route::get('halo2', function () {
	return "<h1>Halo, Selamat datang <\h1>";
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/berita', function () {
	return view('berita');
});

Route::get('/hello', function () {
	return view('hello');
});

Route::get('/js1', function () {
	return view('js1');
});

Route::get('/js2', function () {
	return view('js2');
});

Route::get('/link', function () {
	return view('link');
});

Route::get('/news', function () {
	return view('news');
});

Route::get('/responsive_bs4', function () {
	return view('responsive_bs4');
});

Route::get('/style', function () {
	return view('style');
});

Route::get('/validasi1', function () {
	return view('validasi1');
});

Route::get('/lat1', function () {
	return view('lat1');
});

Route::get('/5026221012', function () {
	return view('5026221012');
});

Route::get('/ETS', function () {
	return view('index');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('show', 'App\Http\Controllers\DosenController@showBlog');


