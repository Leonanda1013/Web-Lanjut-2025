<?php

use Illuminate\Support\Facades\Route; // Mengimpor kelas Route untuk mendefinisikan rute
use App\Http\Controllers\ItemController; // Mengimpor ItemController untuk menangani permintaan terkait item

Route::get('/', function () { // Mendefinisikan rute untuk halaman utama ('/')
    return view('welcome'); // Menampilkan tampilan 'welcome.blade.php'
});

Route::resource('items', ItemController::class); // Membuat rute resource untuk CRUD pada ItemController
