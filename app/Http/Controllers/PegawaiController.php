<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = DB::table('pegawai')->paginate(10);

        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah(){

        return view('tambah');
    }
    public function store(Request $request){

    
    //this method for insert data to table pegawai
    DB::table('pegawai')->insert([
        'pegawai_nama' => $request->nama,
        'pegawai_jabatan' => $request->jabatan,
        'pegawai_umur' => $request->umur,
        'pegawai_alamat' => $request->alamat
    ]);
    
    // swipe page to page pegawai
    return redirect('/pegawai');

    }
    
    public function edit($id){

        // This Method for edit data pegawai
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        
        // Passing data pegawai who get to view edit.balde.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request){

        //Update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
            
        ]);

        //alihkan page ke page pegawai
        return redirect('/pegawai');
    }
        //method for delete data pegawai
    public function delete($id){

        //menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id',$id)->delete();

        //alihkan page ke page pegawai
        return redirect('/pegawai');
    }
}
