<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TransaksiController extends Controller
{
    
    //method mengambil data pada db
    public function transaksi()
    {
    	// mengambil data dari table 
    	$pembelian = DB::table('pembelian')->get();
 
    	// mengirim data ke view 
    	return view('transaksi',['pembelian' => $pembelian]);
 
    }

	// method untuk insert data ke table transaksi
	public function store(Request $request)
	{
		// insert data ke table transaksi
		DB::table('pembelian')->insert([
			'kd_pembelian' => $request->kd_pembelian,
			'nama_pembeli' => $request->nama_pembeli,
			'produk_beli' => $request->produk_beli,
			'jumlah_beli' => $request->jumlah_beli,
            'total' => $request->total
		]);
		// alihkan halaman ke halaman transaksi
		return redirect('/transaksi');

	}

		// method untuk hapus data pegawai
		public function hapus($kd_pembelian)
		{
			// menghapus data pegawai berdasarkan id yang dipilih
			DB::table('pembelian')->where('kd_pembelian',$kd_pembelian)->delete();
			
			// alihkan halaman ke halaman pegawai
			return redirect('/transaksi');
		}
}
