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
    return view('welcome');
});

Route::get('angka/{nilai}', function ($nilai) {
        return "$nilai";
});

Route::get('Penjumlahan/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return "$nilai1 + $nilai2";
});

Route::get('Pengurangan/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return "$nilai1 - $nilai2";
});

?>

