<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;

class PasienController extends Controller
{
    //

    public function PasienView(){
        return view('siapus.antreansaya');
    }
    public function PasienAdd(){
        return view('siapus.pendaftaranantrean');
    }

    public function PasiensStore(Request $request){
        $validatedData=$request->validate([
            'nik' =>'required|unique:pasiens',
        ]);
        
        $data=new pasien();
        $data->nik=$request->nik;
        $data->nama_pasien=$request->nama;
        $data->provinsi=$request->provinsi;
        $data->kabupaten=$request->kabupaten;
        $data->kecamatan=$request->kecamatan;
        $data->kelurahan=$request->kelurahan;
        $data->alamat=$request->alamat;
        $data->id_puskemas=$request->puskesmas;
        $data->id_poli=$request->poli;
        $data->save();

        return redirect()->route('pasien.view');
    }
}
