<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('/about', function(){
    return '<h1>Halo Everyone</h1>'
        . 'Selamat Datang di webapp saya<br>'
        . 'Laravel, emang keren';
});

// route biodata
Route::get('/myself', function(){
    return '<h1>Halo Everyone</h1>'
        . 'Nama Saya Siti Nur Aliifah M<br>'
        . 'Saya Berumur 17 tahun<br>'
        . 'Saya Sekolah di SMK Assalaam Bandung<br>'
        . 'Saya Mengambil Jurusan RPL (Rekayasa Perangkat Lunak)<br>'
        . 'Saat Ini Saya Berada di Kelas 11';
});

// route basic to view
Route::get('animals', function(){
    $king = "Lion";
    $hewan = ["Lion","Tiger","Snake",];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function(){
    $fruit = ["Apple", "Melon", "Grape"];
    return view('vegetable_page', ['buah' => $fruit]);
});

// route parameter ditandai {}
Route::get('product/{name}', function($name){
    return "produk: $name";
});

// Tugas
Route::get('badan/{nama}/{berat}/{tinggi}', function($nama, $bb, $tb){
    $bmi = $bb / (($tb / 100) ** 2);
    if($bmi > 30){
        $ket = "Obesitas";
    } elseif ($bmi > 25){
        $ket = "Kelebihan";
    } elseif ($bmi > 18.5){
        $ket = "Ideal";
    } elseif ($bmi < 18.5){
        $ket = "Kekurangan berat badan ";
    }
    return "Nama : $nama <br>" .
     "Berat Badan : $bb <br>" .
     "Tinggi Badan : $tb<br>" .
     "Nilai Bmi : $bmi<br>" .
     "Keterangan : $ket";
});

// route optional parameter -> ditandai ?
Route::get('myname/{name?}', function($a = "Aliifah"){
    return "My Name is $a";
});