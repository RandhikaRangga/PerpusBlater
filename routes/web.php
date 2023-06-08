<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('/', function () {
//     return view('Layouts.main');
// });

Route::get('/dashboard', function(){
    return view('Layouts.dashboard');
});

Route::get('/anggota', function(){
    return view('Layouts.anggota');
});

Route::resource('/buku', \App\Http\Controllers\BukuController::class);

// Route Welcome
