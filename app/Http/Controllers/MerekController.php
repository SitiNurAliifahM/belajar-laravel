<?php

namespace App\Http\Controllers;
use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    public function merek(){
        $merek = Merek::all();

        return view('merek.index', compact('merek'));
    }

    public function merk($id){
        $merek = Merek::findOrFail($id);

        return view('merek.show', compact('merek'));
    }
}
