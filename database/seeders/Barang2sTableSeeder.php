<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang'=>'HP', 'harga'=> 3000000, 'stok'=> 35],
            ['nama_barang'=>'Laptop', 'harga'=> 7000000, 'stok'=> 25],
            ['nama_barang'=>'Keyboard', 'harga'=> 1000000, 'stok'=> 11]
        ];

        // masukkan data ke database
        DB::table('barang2s')->insert($barang2s);
    }
}
