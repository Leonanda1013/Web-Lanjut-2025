<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_level', function (Blueprint $table) {
            $table->integer('level_id'); 
            $table->string('level_kode', 10)->unique(); // Menggunakan string, bukan timestamps
            $table->string('level_nama', 100); // Menggunakan string, bukan timestamps
            $table->timestamps(); // Untuk created_at dan updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_level');
    }
};
