<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    //
    public function index(){
        $mhs1 = 'Fawwaz'; $asal = 'Jakarta';
        //mengarahkan ke file nilai
        //compact library yang membantu mengirimkan variable ke file tujuan
        //compact bisa ditulis [$mhs => 'mhs']; 
        return view('nilai', compact('mhs1', 'asal'));
    }
}
