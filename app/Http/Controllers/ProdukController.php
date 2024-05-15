<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function tampil(){
        $produks = Produk::all();

        return view('produks.index', compact('produks'));
    }

    public function nampil($id){
        $produks = Produk::findOrFail($id);
        return view('produks.show', compact('produks'));
    }
}
