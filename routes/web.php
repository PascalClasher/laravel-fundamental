<?php

use Illuminate\Support\Facades\Route;

// Menampilkan Halaman Utama Laravel
Route::get('/', function () {
    return view('welcome');
});


// Tugas 2 Laravel

// No 1
Route::group(['prefix' => 'list-menu'], function () {
    Route::get('/', function () {
        return "ini adalah halaman yang menampilkan semua yang ada di Cafe Amandemy..";
    });

    // No 2
    Route::get('/bakso/{price}', function ($price) {
        return "Anda memilih makanan bakso dengan harga Rp. $price";
    });
});

    // No 3
Route::get('get-all-data', function() {
    return response()->json([
        'info' => 'Data berhasil didapatkan',
        'data' => [
            [
                'makanan' => 'Soto Mie',
                'harga' => 15000
            ],
            [
                'makanan' => 'Bakso Malang',
                'harga' => 13000
            ],
            [
                'makanan' => 'Ketoprak',
                'harga' => 15000
            ]
        ]
    ], 200);
});