<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
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
        $Jadwal = Dokter::paginate(5); // Pagination mengambil 5 data
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
        Dokter::create([
            'id' => $request->id,
            'nama_dokter' => $request->Nama,
            'jam_praktek' => $request->Jam_Praktik,
            'hari_praktek' => $request->Hari_Praktik,
            'kuota' => $request->Kuota,
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
        $Jadwal = Dokter::find($id);
        return view('jadwal.detail', compact('Jadwal'));
    }

    public function tampil(Request $request)
    {
        $cari = $request->get('search');
        if ($cari) {
            $jadwal = Dokter::with('dokter');
            $paginate = Dokter::orderBy('nama_dokter', 'asc')->where("nama_dokter", "LIKE", "%$cari%")->paginate(5);
        } else {
            $jadwal = Dokter::with('dokter');
            $paginate = Dokter::orderBy('nama_dokter', 'asc')->paginate(5);
        }
        return view('jadwal.tampil', ['jadwal' => $jadwal, 'paginate' => $paginate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Jadwal = Dokter::find($id);

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
        $Jadwal = Dokter::find($id);
        $Jadwal->id = $id;
        $Jadwal->nama_dokter = $request->Nama;
        $Jadwal->jam_praktek = $request->Jam_Praktik;
        $Jadwal->hari_praktek = $request->Hari_Praktik;
        $Jadwal->kuota = $request->Kuota;

        $Jadwal->save();

        return redirect('/tampilJadwal')
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
        $Jadwal=Dokter::find($id);
        $Jadwal->delete();
        return redirect()->route('jadwal.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
