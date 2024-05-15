<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli'=>'Aliifah', 'jenis_kelamin'=>'P'],
            ['nama_pembeli'=>'Cindy', 'jenis_kelamin'=>'P'],
            ['nama_pembeli'=>'Axe', 'jenis_kelamin'=>'L']
        ];

        // masukkan data ke database
        DB::table('pembelis')->insert($pembelis);
    }
}
