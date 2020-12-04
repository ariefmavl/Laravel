<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        //mengambil data dari table mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();

        //mengirim dara mahasiswa ke view index
        return view ('index',['mahasiswa' => $mahasiswa]);
    }

    public function add()
    {
        //memanggil view add
        return view('add');
    }
    
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table mahasiswa
	DB::table('mahasiswa')->insert([
		'mahasiswa_nama' => $request->nama,
		'mahasiswa_jurusan' => $request->jurusan,
		'mahasiswa_umur' => $request->umur,
		'mahasiswa_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman mahasiswa
	return redirect('/mahasiswa');

    }

    // method untuk edit data mahasiswa
    public function edit($id)
    {
	// mengambil data mahasiswa berdasarkan id yang dipilih
	$mahasiswa = DB::table('mahasiswa')->where('mahasiswa_id',$id)->get();
	// passing data mahasiswa yang didapat ke view edit.blade.php
	return view('edit',['mahasiswa' => $mahasiswa]);

    }

    // update data mahasiswa
    public function update(Request $request)
    {
	// update data mahasiswa
	DB::table('mahasiswa')->where('mahasiswa_id',$request->id)->update([
		'mahasiswa_nama' => $request->nama,
		'mahasiswa_jurusan' => $request->jurusan,
		'mahasiswa_umur' => $request->umur,
		'mahasiswa_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman mahasiswa
	return redirect('/mahasiswa');
    }

    // method untuk hapus data mahasiswa
    public function delete($id)
    {
	// menghapus data mahasiswa berdasarkan id yang dipilih
	DB::table('mahasiswa')->where('mahasiswa_id',$id)->delete();
		
	// alihkan halaman ke halaman mahasiswa
	return redirect('/mahasiswa');
    }
}
