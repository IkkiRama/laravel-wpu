<?php

use Illuminate\Support\Facades\Route;

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
    $nama = 'Rifki Romadhan Kimak';
    return view('about', ['nama' => $nama]);
});


// Route::get('/siswa', [siswaController::siswa, 'index']);
