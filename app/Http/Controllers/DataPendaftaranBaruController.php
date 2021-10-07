<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Daftar;
use App\Models\dokter;
use Illuminate\Http\Request;

class DataPendaftaranBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $dokter = dokter::all();
        return view('form_advanceds', ['dokter' => $dokter]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id_daftar' => 'required',
            'nama_pemilik' => 'required',
            'jenis_hewan' => 'required',
            'usia' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
            'id_dokter' => 'required',
        ]);

        Daftar::create([
            'nama_pemilik' => $request->pemilik,
            'jenis_hewan' => $request->jenis_hewan,
            'usia' => $request->usia,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'id_dokter' => $request->id_dokter,
            // 'kelas_id' => $request->kelas_id,

        ]);
        return redirect() . back();
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
        $Jadwal = Antrian::find($id);
        $Jadwal->delete();
        return redirect('antrianAdmin')
            ->with('success', 'Data Berhasil Dihapus');
    }
    public function cetak_pdf($id)
    {
        $jml = Antrian::orderBy('no_antrian', 'desc')->where('id', $id)->first();
        $pdf = PDF::loadview('antrian.cetak_pdf', ['jml' => $jml]);
        return $pdf->stream();
    }
}
