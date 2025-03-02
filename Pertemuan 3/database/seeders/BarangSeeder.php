<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG1', 'barang_nama' => 'Tablet', 'harga_beli' => 4000000, 'harga_jual' => 6000000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG2', 'barang_nama' => 'Earbuds Wireless', 'harga_beli' => 1500000, 'harga_jual' => 2500000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG3', 'barang_nama' => 'Sweater Hangat', 'harga_beli' => 180000, 'harga_jual' => 350000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG4', 'barang_nama' => 'Jersey Olahraga', 'harga_beli' => 60000, 'harga_jual' => 120000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG5', 'barang_nama' => 'Kue Kering', 'harga_beli' => 30000, 'harga_jual' => 60000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG6', 'barang_nama' => 'Teh Hijau', 'harga_beli' => 70000, 'harga_jual' => 140000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG7', 'barang_nama' => 'Rak Buku', 'harga_beli' => 450000, 'harga_jual' => 750000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BRG8', 'barang_nama' => 'Lampu Hias', 'harga_beli' => 280000, 'harga_jual' => 550000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BRG9', 'barang_nama' => 'Maskara Waterproof', 'harga_beli' => 120000, 'harga_jual' => 220000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG10', 'barang_nama' => 'Body Lotion', 'harga_beli' => 200000, 'harga_jual' => 400000],
        ];
        
        DB::table('m_barang')->insert($barang);
    }
}