<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //
    public function index(){
        echo "Menampilkan data animals";
    }
    public function store(){
        echo "Menambahkan hewan baru";
    }
}
