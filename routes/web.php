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
    return view('landing.page.index');
});

Route::get('/tentang-pirngadi', function () {
    return view('landing.page.about');
});

Route::get('/kontak-pirngadi', function () {
    return view('landing.page.contact');
});

Route::get('/visi-misi-pirngadi', function () {
    return view('landing.page.visi_misi');
});

Route::get('/pengembangan-pirngadi', function () {
    return view('landing.page.maintace');
});
