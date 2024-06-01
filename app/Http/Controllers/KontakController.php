<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    
    public function index()
    {
    	// mengambil data dari table
    	$kontak = DB::table('kontak')->get();
 
    	// mengirim data ke view
    	return view('VKontak',['kontak' => $kontak]);
 
    }
    
	public function tambah(Request $request)
    {
    	DB::table('kontak')->insert([
			'kd_kontak' => $request->kd_kontak,
			'nama_kontak' => $request->nama_kontak,

		]);
		// alihkan halaman ke halaman kontak
		return redirect('/kontak');
 
    }


	public function hapus(Request $request)
    {
		$kd_kontak=$request->kd_kontak;
		DB::table('kontak')->where('kd_kontak',$kd_kontak)->delete();

		// alihkan halaman ke halaman kontak
		return redirect('/kontak');
 
    }
	

	public function edit(Request $request)
    {
    	DB::table('kontak')->where('kd_kontak',$request->kd_kontak)->update([
		
			'nama_kontak' => $request->nama_kontak,

		]);
		// alihkan halaman ke halaman kontak
		return redirect('/kontak');
 
    }
	

}