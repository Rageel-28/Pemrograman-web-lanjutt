<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Kemeja Pria', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 80000, 'harga_jual' => 120000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG03', 'barang_nama' => 'Mouse Wireless', 'harga_beli' => 45000, 'harga_jual' => 65000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Keyboard Mekanik', 'harga_beli' => 150000, 'harga_jual' => 250000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG05', 'barang_nama' => 'Keripik Kentang', 'harga_beli' => 8000, 'harga_jual' => 12000],
            
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG06', 'barang_nama' => 'Coklat Batang', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG07', 'barang_nama' => 'Kopi Kemasan', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BRG08', 'barang_nama' => 'Teh Manis Botol', 'harga_beli' => 4000, 'harga_jual' => 6000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BRG09', 'barang_nama' => 'Sabun Cuci Muka', 'harga_beli' => 25000, 'harga_jual' => 35000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG10', 'barang_nama' => 'Shampo Botol', 'harga_beli' => 20000, 'harga_jual' => 28000],
            
            ['barang_id' => 11, 'kategori_id' => 1, 'barang_kode' => 'BRG11', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 30000, 'harga_jual' => 45000],
            ['barang_id' => 12, 'kategori_id' => 2, 'barang_kode' => 'BRG12', 'barang_nama' => 'Flashdisk 32GB', 'harga_beli' => 40000, 'harga_jual' => 55000],
            ['barang_id' => 13, 'kategori_id' => 3, 'barang_kode' => 'BRG13', 'barang_nama' => 'Biskuit Coklat', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_id' => 14, 'kategori_id' => 4, 'barang_kode' => 'BRG14', 'barang_nama' => 'Air Mineral', 'harga_beli' => 2000, 'harga_jual' => 3500],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG15', 'barang_nama' => 'Deodorant', 'harga_beli' => 18000, 'harga_jual' => 25000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
