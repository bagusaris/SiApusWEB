<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;
use App\Models\puskesmas;
use App\Models\poli;

class PasienController extends Controller
{
    const FETCHED_ATTRIBUTE = [
        'id_puskesmas',
        'id_poli',
        'nik',
        'nama_pasien',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'alamat',
    ];
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $puskesmas = puskesmas::all();
        $poli = poli::all();
        return view('siapus.pendaftaranantrean', compact('puskesmas', 'poli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->only(self::FETCHED_ATTRIBUTE);
        $validatedData=$request->validate([
            'nik' =>'required|unique:pasiens',
        ]);
        
        $pasien = pasien::create($data);

        return redirect('/tiket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
