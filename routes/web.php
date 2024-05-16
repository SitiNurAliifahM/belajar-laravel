<?php

use App\Http\Controllers\MerekController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;
use App\Models\Siswa;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Pembeli;
use App\Models\Barang2;
use App\Models\Transaksi;
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
// Route::get('product/{name}', function($name){
//     return "produk: $name";
// });

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

// menampilkan data dari database
Route::get('/testpost', function (){
    $post = Post::all();
    return $post; 
});

Route::get('/testbarang', function (){
    $barang = Barang::all();
    return $barang; 
});

Route::get('/testsiswa', function (){
    $siswa = Siswa::all();
    return $siswa; 
});

// Route::get('/testmodelsiswa', function (){
//     $data = Siswa::where('alamat','like','%rancamanyar%')->get();
//     return $data; 
// });

Route::get('/testmodelpost', function(){
    $post = Post::all();

    return view('tampil_post', compact('post'));
});

Route::get('/testmodelbarang', function(){
    $barang = Barang::all();

    return view('tampil_barang', compact('barang'));
});

Route::get('/testmodelsiswa', function(){
    $siswa = Siswa::all();

    return view('tampil_siswa', compact('siswa'));
});

Route::get('/testmodelpengguna', function(){
    $pengguna = Pengguna::all();

    return view('tampil_pengguna', compact('pengguna'));
});

Route::get('/testmodeltelepon', function(){
    $telepon = Telepon::all();

    return view('tampil_telepon', compact('telepon'));
});

Route::get('/testmodelmerek', function(){
    $merek = Merek::all();

    return view('tampil_merek', compact('merek'));
});

Route::get('/testmodelproduk', function(){
    $produk = Produk::all();

    return view('tampil_produk', compact('produk'));
});

Route::get('/testpembeli', function(){
    $pembeli = Pembeli::all();

    return view('tampil_pembeli', compact('pembeli'));
});

Route::get('/testbarang2', function(){
    $barang2 = Barang2::all();

    return view('tampil_barang2', compact('barang2'));
});

Route::get('/testtransaksi', function(){
    $transaksi = Transaksi::all();

    return view('tampil_transaksi', compact('transaksi'));
});

//controller
Route::get('post', [PostController::class,'menampilkan']);
Route::get('post/{id}', [PostController::class,'show']);

Route::get('produk', [ProdukController::class,'tampil']);
Route::get('produk/{id}', [ProdukController::class,'nampil']);

Route::get('merek', [MerekController::class,'merek']);
Route::get('merek/{id}', [MerekController::class,'merk']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CRUD brand
use App\Http\Controllers\BrandController;
Route::resource('brand', BrandController::class);

use App\Http\Controllers\ProductController;
Route::resource('product', ProductController::class);
