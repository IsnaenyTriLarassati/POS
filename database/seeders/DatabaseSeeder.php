<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{
    $this->call([
        KategoriSeeder::class,
        BarangSeeder::class,
        StockSeeder::class,
        PenjualanSeeder::class,
        PenjualanDetailSeeder::class,
        LevelSeeder::class,
        UserSeeder::class,
    ]);
}
}
