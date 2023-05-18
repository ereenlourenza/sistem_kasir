<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DetailTransaksiController extends Controller
{
    
    //method mengambil data pada db
    public function detail_transaksi()
    {
    	// mengambil data dari table 
    	$detail_transaksi = DB::table('detail_transaksi')->get();
 
    	// mengirim data ke view 
    	return view('transaksi',['detail_transaksi' => $detail_transaksi]);
 
    }

	// method untuk insert data ke table transaksi
	public function store(Request $request)
	{
		// insert data ke table transaksi
		DB::table('detail_transaksi')->insert([
			'tanggal_transaksi' => $request->tanggal_transaksi,
			'kd_produk' => $request->kd_produk,
			'harga_produk' => $request->harga_produk,
			'jumlah_beli' => $request->jumlah_beli,
            'harga_total' => $request->harga_total
		]);
		
		DB::table('laporan')->insert([
			'tanggal_transaksi' => $request->tanggal_transaksi,
			'jumlah_beli' => $request->jumlah_beli

		]);
		// alihkan halaman ke halaman transaksi
		return redirect('/transaksi');

	}

		// method untuk hapus data pegawai
		public function hapus($kd_detail_transaksi)
		{
			// menghapus data pegawai berdasarkan id yang dipilih
			DB::table('detail_transaksi')->where('kd_detail_transaksi',$kd_detail_transaksi)->delete();
			
			// alihkan halaman ke halaman pegawai
			return redirect('/transaksi');
		}
}
