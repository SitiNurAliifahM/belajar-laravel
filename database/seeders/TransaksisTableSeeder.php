<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id_barang'=> 1, 'id_pembeli'=> 1, 'jumlah'=> 9, 'tanggal_produksi'=> '2023-07-11'],
            ['id_barang'=> 1, 'id_pembeli'=> 1, 'jumlah'=> 20, 'tanggal_produksi'=> '2023-08-12'],
            ['id_barang'=> 2, 'id_pembeli'=> 2, 'jumlah'=> 11, 'tanggal_produksi'=> '2023-09-13'],
            ['id_barang'=> 2, 'id_pembeli'=> 2, 'jumlah'=> 2, 'tanggal_produksi'=> '2023-10-14'],
            ['id_barang'=> 3, 'id_pembeli'=> 3, 'jumlah'=> 3, 'tanggal_produksi'=> '2023-11-15'],
            ['id_barang'=> 3, 'id_pembeli'=> 3, 'jumlah'=> 6, 'tanggal_produksi'=> '2023-12-16']
        ];

        // masukkan data ke database
        DB::table('transaksis')->insert($transaksis);
    }
}
