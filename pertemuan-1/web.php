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

Route::get('angka/{nilai}', function ($nilai) {
    return "nilai nya = $nilai";
});

Route::get('penjumlahan/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return $nilai1 + $nilai2;
});

Route::get('pengurangan/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return $nilai1 - $nilai2;
});

?>
