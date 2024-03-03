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
            [
                'kategori_id' => 1,
                'barang_kode' => 'EL001',
                'barang_nama' => 'Kulkas',
                'harga_beli' => 8000000,
                'harga_jual' => 10000000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'EL002',
                'barang_nama' => 'Mesin Cuci',
                'harga_beli' => 9000000,
                'harga_jual' => 11000000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'CL001',
                'barang_nama' => 'Celana Pendek',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'CL002',
                'barang_nama' => 'Kaos Polos Hitam',
                'harga_beli' => 60000,
                'harga_jual' => 85000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MK001',
                'barang_nama' => 'Marie Regal 1kg',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MK002',
                'barang_nama' => 'Butter Wisjman',
                'harga_beli' => 350000,
                'harga_jual' => 400000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'ATK001',
                'barang_nama' => 'Pulpen Gel',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'ATK002',
                'barang_nama' => 'Pensil 2B',
                'harga_beli' => 5000,
                'harga_jual' => 6000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'HC001',
                'barang_nama' => 'Detergen Top Load',
                'harga_beli' => 75000,
                'harga_jual' => 90000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'HC002',
                'barang_nama' => 'Pembersih Kaca',
                'harga_beli' => 8500,
                'harga_jual' => 10000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
