<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    //method mengambil data pada db
    public function karyawan()
    {
    	// mengambil data dari table 
    	$karyawan = DB::table('karyawan')->get();
 
    	// mengirim data ke view 
    	return view('karyawan',['karyawan' => $karyawan]);
 
    }

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	
	{
		// insert data ke table pegawai
		DB::table('karyawan')->insert([
			'kd_karyawan' => $request->kd_karyawan,
			'nama_karyawan' => $request->nama_karyawan,
			'tlpn_karyawan' => $request->tlpn_karyawan,
			'alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
 
	}

    // method untuk edit data pegawai
	public function edit($kd_karyawan)
	{	
		// mengambil data pegawai berdasarkan id yang dipilih
		$karyawan = DB::table('karyawan')->where('kd_karyawan',$kd_karyawan)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['karyawan' => $karyawan]);
 
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('karyawan')->where('kd_karyawan',$request->kd_karyawan)->update([
			'kd_karyawan' => $request->kd_karyawan,
			'nama_karyawan' => $request->nama_karyawan,
			'tlpn_karyawan' => $request->tlpn_karyawan,
			'alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}

	// method untuk hapus data pegawai
	public function hapus($kd_karyawan)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kd_karyawan',$kd_karyawan)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}
}
