<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama'=>'Laptop', 'jumlah'=> 25],
            ['nama'=>'Keyboard', 'jumlah'=> 25],
            ['nama'=>'Komputer', 'jumlah'=> 25]
        ];

        // masukkan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
