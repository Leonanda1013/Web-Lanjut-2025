<?php

use Illuminate\Database\Migrations\Migration; // Menggunakan kelas Migration untuk mengelola database
use Illuminate\Database\Schema\Blueprint; // Menggunakan Blueprint untuk mendefinisikan struktur tabel
use Illuminate\Support\Facades\Schema; // Menggunakan Schema untuk membuat atau menghapus tabel

return new class extends Migration // Mengembalikan instance dari kelas anonim yang mewarisi Migration
{
    public function up(): void // Method untuk membuat tabel saat migrasi dijalankan
    {
        Schema::create('items', function (Blueprint $table) { // Membuat tabel 'items'
            $table->id(); // Menambahkan kolom ID sebagai primary key (auto-increment)
            $table->string('name'); // Menambahkan kolom 'name' dengan tipe data string
            $table->text('description'); // Menambahkan kolom 'description' dengan tipe data text
            $table->timestamps(); // Menambahkan kolom 'created_at' dan 'updated_at' secara otomatis
        });
    }

    public function down(): void // Method untuk menghapus tabel saat rollback migrasi
    {
        Schema::dropIfExists('items'); // Menghapus tabel 'items' jika tabel tersebut ada
    }
};
