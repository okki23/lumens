<?php
namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Request;
use App\Siswa;

/**
* 
*/
class SiswaController extends Controller
{
	
	public function getData(Request $request){
		$data = Siswa::all();
		if ($data) {
				$res['satus'] = true;
				$res['message'] = 'Succces';
				$res['response'] = $data;
				return response()->json($res);
		}else{

				$res['satus'] = false;
				$res['message'] = 'Succces';
				$res['response'] = 'No esponse';
				return response()->json($res);
		}

	}

	public function postdata(Request $request){
		$nama = $request->input('nama');
		$alamat = $request->input('alamat');


		$simpan = new Siswa();

		$simpan->nama = $nama;
		$simpan->alamat = $alamat;

		$simpan->save();

		if ($simpan) {
			$res['satus'] = true;
			$res['message'] = 'Succces';
			$res['response'] = $simpan;
			return response()->json($res);
		}else{

			$res['satus'] = false;
			$res['message'] = 'Succces';
			$res['response'] = 'No esponse';
			return response()->json($res);
		}


		


	}
}

?>