<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            ['kategori_id' => 1, 'katogori_kode' => 'KAT1', 'katogori_nama' => 'Mobil'],
            ['kategori_id' => 2, 'katogori_kode' => 'KAT2', 'katogori_nama' => 'Motor'],
            ['kategori_id' => 3, 'katogori_kode' => 'KAT3', 'katogori_nama' => 'Pesawat'],
            ['kategori_id' => 4, 'katogori_kode' => 'KAT4', 'katogori_nama' => 'Kapal'],
            ['kategori_id' => 5, 'katogori_kode' => 'KAT5', 'katogori_nama' => 'Sepeda'],
        ];
        DB::table('m_kategori')->insert($kategori);
    }
}