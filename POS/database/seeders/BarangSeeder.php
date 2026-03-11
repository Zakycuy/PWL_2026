<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_barang')->insert([
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG01',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2500,
                'harga_jual' => 3500
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG02',
                'barang_nama' => 'Mie Sedaap',
                'harga_beli' => 2400,
                'harga_jual' => 3400
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG03',
                'barang_nama' => 'Beras 5kg',
                'harga_beli' => 60000,
                'harga_jual' => 68000
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG04',
                'barang_nama' => 'Sabun Lifebuoy',
                'harga_beli' => 4000,
                'harga_jual' => 5500
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG05',
                'barang_nama' => 'Shampoo Sunsilk',
                'harga_beli' => 12000,
                'harga_jual' => 15000
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG06',
                'barang_nama' => 'Pasta Gigi Pepsodent',
                'harga_beli' => 8000,
                'harga_jual' => 10000
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG07',
                'barang_nama' => 'Sapu Lantai',
                'harga_beli' => 15000,
                'harga_jual' => 20000
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG08',
                'barang_nama' => 'Pel Lantai',
                'harga_beli' => 18000,
                'harga_jual' => 23000
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG09',
                'barang_nama' => 'Sabun Cuci Piring',
                'harga_beli' => 7000,
                'harga_jual' => 9000
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG10',
                'barang_nama' => 'Lampu LED',
                'harga_beli' => 20000,
                'harga_jual' => 25000
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG11',
                'barang_nama' => 'Kabel Roll',
                'harga_beli' => 45000,
                'harga_jual' => 55000
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG12',
                'barang_nama' => 'Stop Kontak',
                'harga_beli' => 10000,
                'harga_jual' => 13000
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG13',
                'barang_nama' => 'Buku Tulis',
                'harga_beli' => 3000,
                'harga_jual' => 4500
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG14',
                'barang_nama' => 'Pulpen',
                'harga_beli' => 2000,
                'harga_jual' => 3500
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG15',
                'barang_nama' => 'Penggaris',
                'harga_beli' => 1500,
                'harga_jual' => 3000
            ]
        ]);
    }
}
