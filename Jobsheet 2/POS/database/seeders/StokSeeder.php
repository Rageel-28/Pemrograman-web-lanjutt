<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $stok_id = 1;
        
        // 15 stok untuk 15 barang (5 barang / supplier)
        for ($supplier_id = 1; $supplier_id <= 3; $supplier_id++) {
            for ($i = 1; $i <= 5; $i++) {
                $barang_id = ($supplier_id - 1) * 5 + $i;
                $data[] = [
                    'stok_id' => $stok_id++,
                    'supplier_id' => $supplier_id,
                    'barang_id' => $barang_id,
                    'user_id' => 1, // Admin
                    'stok_tanggal' => Carbon::now(),
                    'stok_jumlah' => rand(10, 50),
                ];
            }
        }

        DB::table('t_stok')->insert($data);
    }
}
