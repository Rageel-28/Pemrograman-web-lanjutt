<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP01', 'supplier_nama' => 'PT. Makmur Sentosa', 'supplier_alamat' => 'Jl. Mawar No 1'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP02', 'supplier_nama' => 'CV. Jaya Abadi', 'supplier_alamat' => 'Jl. Melati No 2'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP03', 'supplier_nama' => 'UD. Sinar Terang', 'supplier_alamat' => 'Jl. Anggrek No 3'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
