<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BiodataController extends Controller
{
    
    public function index()
    {
    	// mengambil data dari table
    	$biodata = DB::table('biodata')->get();
 
    	// mengirim data ke view
    	return view('VBiodata',['biodata' => $biodata]);
 
    }
    
	public function tambah(Request $request)
    {
    	DB::table('biodata')->insert([
			'kd_biodata' => $request->kd_biodata,
			'nama_biodata' => $request->nama_biodata,

		]);
		// alihkan halaman ke halaman biodata
		return redirect('/biodata');
 
    }


	public function hapus(Request $request)
    {
		$kd_biodata=$request->kd_biodata;
		DB::table('biodata')->where('kd_biodata',$kd_biodata)->delete();

		// alihkan halaman ke halaman biodata
		return redirect('/biodata');
 
    }
	

	public function edit(Request $request)
    {
    	DB::table('biodata')->where('kd_biodata',$request->kd_biodata)->update([
		
			'nama_biodata' => $request->nama_biodata,

		]);
		// alihkan halaman ke halaman biodata
		return redirect('/biodata');
 
    }
	

}