<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'barang_id'     => $i,
                'user_id'       => rand(1, 3), // Sesuaikan dengan user yang ada
                'stock_tanggal' => now(),
                'stock_jumlah'  => rand(10, 100), // Ganti "jumlah" dengan "stock_jumlah"
            ];
        }

        DB::table('t_stock')->insert($data);
    }
}
