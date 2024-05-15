<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk'=>'Samsung A13', 'jumlah'=> 3, 'tanggal_produksi'=>'2023-01-13', 'id_merek'=>1],
            ['nama_produk'=>'Samsung A05S', 'jumlah'=> 5, 'tanggal_produksi'=>'2023-02-23', 'id_merek'=>1],
            ['nama_produk'=>'Oppo A1K', 'jumlah'=> 9, 'tanggal_produksi'=>'2023-03-17', 'id_merek'=>2],
            ['nama_produk'=>'Oppo A16', 'jumlah'=> 6, 'tanggal_produksi'=>'2023-04-27', 'id_merek'=>2],
            ['nama_produk'=>'Vivo Y12', 'jumlah'=> 11, 'tanggal_produksi'=>'2023-05-15', 'id_merek'=>3],
            ['nama_produk'=>'Vivo Y13', 'jumlah'=> 7, 'tanggal_produksi'=>'2023-06-25', 'id_merek'=>3]
        ];

        // masukkan data ke database
        DB::table('produks')->insert($produks);
    }
}
