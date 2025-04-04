<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Meja Kayu', 'harga_beli' => 500000, 'harga_jual' => 700000, 'kategori_id' => 1],
            ['barang_id' => 2, 'barang_kode' => 'B002', 'barang_nama' => 'Kursi Sofa', 'harga_beli' => 200000, 'harga_jual' => 300000, 'kategori_id' => 1],
            ['barang_id' => 3, 'barang_kode' => 'B003', 'barang_nama' => 'TV LED', 'harga_beli' => 1500000, 'harga_jual' => 1800000, 'kategori_id' => 2],
            ['barang_id' => 4, 'barang_kode' => 'B004', 'barang_nama' => 'Kulkas', 'harga_beli' => 2200000, 'harga_jual' => 2500000, 'kategori_id' => 2],
            ['barang_id' => 5, 'barang_kode' => 'B005', 'barang_nama' => 'Jam Tangan', 'harga_beli' => 50000, 'harga_jual' => 75000, 'kategori_id' => 3],
            ['barang_id' => 6, 'barang_kode' => 'B006', 'barang_nama' => 'Kacamata', 'harga_beli' => 70000, 'harga_jual' => 100000, 'kategori_id' => 3],
            ['barang_id' => 7, 'barang_kode' => 'B007', 'barang_nama' => 'Lego Set', 'harga_beli' => 300000, 'harga_jual' => 400000, 'kategori_id' => 4],
            ['barang_id' => 8, 'barang_kode' => 'B008', 'barang_nama' => 'Mobil Remote', 'harga_beli' => 150000, 'harga_jual' => 200000, 'kategori_id' => 4],
            ['barang_id' => 9, 'barang_kode' => 'B009', 'barang_nama' => 'Sepatu Olahraga', 'harga_beli' => 400000, 'harga_jual' => 550000, 'kategori_id' => 5],
            ['barang_id' => 10, 'barang_kode' => 'B010', 'barang_nama' => 'Sepatu Formal', 'harga_beli' => 350000, 'harga_jual' => 500000, 'kategori_id' => 5],
        ];

        DB::table('m_barang')->insert($data);
    }
}
