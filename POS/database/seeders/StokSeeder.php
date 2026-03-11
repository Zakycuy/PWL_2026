<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {
            DB::table('t_stok')->insert([
                'supplier_id' => rand(1,3),   // karena supplier ada 3
                'barang_id' => $i,            // barang 1 - 15
                'user_id' => 1,               
                'stok_tanggal' => now(),
                'stok_jumlah' => rand(10,100)
            ]);
        }
    }
}
