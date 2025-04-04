<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) { // 10 transaksi
            for ($j = 1; $j <= 3; $j++) { // 3 barang per transaksi
                $barang_id = rand(1, 10);
                $harga = rand(50000, 500000); // Harga acak per barang
                $jumlah = rand(1, 5);
                
                $data[] = [
                    'detail_id'     => null, // Auto Increment
                    'penjualan_id'  => $i, // Menggunakan ID transaksi sesuai loop
                    'barang_id'     => $barang_id,
                    'harga'         => $harga,
                    'jumlah'        => $jumlah,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
