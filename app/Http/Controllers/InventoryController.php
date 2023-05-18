<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    //method mengambil data pada db
    public function inventory()
    {
    	// mengambil data dari table 
    	$gudang = DB::table('gudang')->get();
 
    	// mengirim data ke view 
    	return view('inventory',['gudang' => $gudang]);
 
    }

	// method untuk insert data ke table transaksi
	public function store(Request $request)
	{
		// insert data ke table transaksi
		DB::table('gudang')->insert([
			'kd_produk' => $request->kd_produk,
			'nama_produk' => $request->nama_produk,
			'deskripsi' => $request->deskripsi,
			'kategori_produk' => $request->kategori_produk,
            'harga_produk' => $request->harga_produk,
            'stok' => $request->stok
		]);
		// alihkan halaman ke halaman transaksi
		return redirect('/inventory');

	}

    // method untuk edit data pegawai
	public function edit($kd_produk)
	{	
		// mengambil data pegawai berdasarkan id yang dipilih
		$gudang = DB::table('gudang')->where('kd_produk',$kd_produk)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editI',['gudang' => $gudang]);
 
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('gudang')->where('kd_produk',$request->kd_produk)->update([
			'kd_produk' => $request->kd_produk,
			'nama_produk' => $request->nama_produk,
			'deskripsi' => $request->deskripsi,
			'kategori_produk' => $request->kategori_produk,
            'harga_produk' => $request->harga_produk,
            'stok' => $request->stok
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/inventory');
	}


    // method untuk hapus data pegawai
	public function hapus($kd_produk)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('gudang')->where('kd_produk',$kd_produk)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/inventory');
	}
}
