<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Jadwal = Jadwal::paginate(5); // Pagination mengambil 5 data
        return view('jadwal.index' , compact('Jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jadwal::create([
            'id' => $request->id,
            'Nama' => $request->Nama,
            'Jam_Praktik' => $request->Jam_Praktik,
            'Hari_Praktik' => $request->Hari_Praktik,
            'Kuota' => $request->Kuota,
        ]);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return 'Data Berhasil Ditambahkan';
        return redirect()->route('jadwal.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Jadwal = Jadwal::find($id);
        return view('jadwal.detail', compact('Jadwal'));
    }

    public function tampil()
    {
        $Jadwal = Jadwal::all();
        return view('jadwal.tampil', compact('Jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Jadwal = Jadwal::find($id);

        return view('jadwal.edit', compact('Jadwal'));
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
        $Jadwal = Jadwal::find($id);
        $Jadwal->id = $id;
        $Jadwal->Nama = $request->Nama;
        $Jadwal->Jam_Praktik = $request->Jam_Praktik;
        $Jadwal->Hari_Praktik = $request->Hari_Praktik;
        $Jadwal->Kuota = $request->Kuota;

        $Jadwal->save();

        return redirect()->route('jadwal.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Jadwal=Jadwal::find($id);
        $Jadwal->delete();
        return redirect()->route('jadwal.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
