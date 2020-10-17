<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AriefController extends Controller
{
    public function index(){
        $nama = "Arief Maulana";

        $matakuliah = ["Algoritma & Pemograman","Kalkulus", "Pemrograman Web"];

        return view('Biodata',['nama' => $nama , 'matkul' => $matakuliah]);
    }
}
