<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detail_id = 1;

        // 30 barang untuk setiap transaksi penjualan (3 barang x 10 transaksi)
        for ($penjualan_id = 1; $penjualan_id <= 10; $penjualan_id++) {
            for ($i = 1; $i <= 3; $i++) {
                $barang_id = rand(1, 15);
                
                $harga = rand(10, 50) * 1000; 
                
                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_id,
                    'harga' => $harga,
                    'jumlah' => rand(1, 5),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
