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
// halaman utama
Route::get('/', function () {
    return view('landing.page.index');
});

Route::get('/info', function () {
    return view('landing.page.modalinfo');
});


// end 

// 
Route::get('/admin/index', function () {
    return view('admin.page.index');
});