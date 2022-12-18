<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputJadwal;

class InputJadwalController extends Controller
{
    /* public function tampilmhs()
    {
        return view('tambahmhs');
    } */

    public function inputjadwal()
    {
        return view('inputjadwal');
    }

    public function simpanjadwal(Request $request){
        $inputjadwal = InputJadwal::create([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'lab' => $request->lab,
            'dospem1' => $request->dospem1,
            'dospem2' => $request->dospem2,
            'dosji1' => $request->dosji1,
            'dosji2' => $request->dosji2,
            'hari' => $request->hari,
            'tgl' => $request->tgl,
            'ruang' => $request->ruang,
        ]);
        return redirect()->route('listjadwal');
    }

    public function index(){
        $data_mhs = \App\Models\InputJadwal::all();
        return view('listjadwal',['data_mhs'=>$data_mhs]);
    }
}