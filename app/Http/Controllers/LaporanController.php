<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    //method mengambil data pada db
    public function laporan()
    {
    	// mengambil data dari table 
    	$laporan = DB::table('laporan')->get();
 
    	// mengirim data ke view 
    	return view('laporan',['laporan' => $laporan]);
 
    }

}
