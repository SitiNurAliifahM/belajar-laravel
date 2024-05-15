<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama'=>'Aliifah', 'jenis_kelamin'=> 'P', 'alamat'=> 'rancamanyar', 'agama'=> 'islam', 'telepon'=> 3865, 'email'=> 'aliifah@gmail.com'],
            ['nama'=>'Kiara', 'jenis_kelamin'=> 'P', 'alamat'=> 'rancamanyar', 'agama'=> 'islam', 'telepon'=> 5825, 'email'=> 'kiara@gmail.com'],
            ['nama'=>'Jelita', 'jenis_kelamin'=> 'P', 'alamat'=> 'cangkuang', 'agama'=> 'islam', 'telepon'=> 9898, 'email'=> 'jelita@gmail.com'],
            ['nama'=>'Cindy', 'jenis_kelamin'=> 'P', 'alamat'=> 'bojong suren', 'agama'=> 'islam', 'telepon'=> 1812, 'email'=> 'cindy@gmail.com'],
            ['nama'=>'Alex', 'jenis_kelamin'=> 'L', 'alamat'=> 'jakarta', 'agama'=> 'islam', 'telepon'=> 4898, 'email'=> 'alex@gmail.com'],
            ['nama'=>'Zaviero', 'jenis_kelamin'=> 'L', 'alamat'=> 'jakarta', 'agama'=> 'islam', 'telepon'=> 8856, 'email'=> 'zaviero@gmail.com'],
            ['nama'=>'Max', 'jenis_kelamin'=> 'L', 'alamat'=> 'jakarta', 'agama'=> 'islam', 'telepon'=> 1897, 'email'=> 'max@gmail.com'],
            ['nama'=>'Alexa', 'jenis_kelamin'=> 'P', 'alamat'=> 'jakarta', 'agama'=> 'islam', 'telepon'=> 2823, 'email'=> 'alexa@gmail.com'],
            ['nama'=>'Bambang', 'jenis_kelamin'=> 'L', 'alamat'=> 'garut', 'agama'=> 'islam', 'telepon'=> 4854, 'email'=> 'bambang@gmail.com'],
            ['nama'=>'Amar', 'jenis_kelamin'=> 'L', 'alamat'=> 'cianjur', 'agama'=> 'islam', 'telepon'=> 6878, 'email'=> 'amar@gmail.com']
        ];

        DB::table('siswas')->insert($siswas);
    }
}
