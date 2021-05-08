<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SiswaController;

// Route::get('/', function () {
//     return 'Kimak';
// });

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about', ['nama' => 'Rifki Romadhan Kimak']);
});




Route::get('/mahasiswa', [MahasiswaController::class, 'index']);




// siswa
Route::get('/siswa', [SiswaController::class, 'index']);
