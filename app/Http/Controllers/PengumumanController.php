<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Pengumuman = Pengumuman::paginate(5); // Pagination mengambil 5 data
        return view('pengumuman.index' , compact('Pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengumuman::create([
            'Id' => $request->id,
            'Judul' => $request->Judul,
            'Isi' => $request->Isi,
        ]);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return 'Data Berhasil Ditambahkan';
        return redirect()->route('pengumuman.index')
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
        $Pengumuman = Pengumuman::find($id);
        return view('pengumuman.detail', compact('Pengumuman'));
    }

    public function tampil()
    {
        $Pengumuman = Pengumuman::all();
        return view('pengumuman.tampil', compact('Pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Pengumuman = Pengumuman::find($id);

        return view('pengumuman.edit', compact('Pengumuman'));
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
        $Pengumuman = Pengumuman::find($id);
        $Pengumuman->Id = $id;
        $Pengumuman->Judul = $request->Judul;
        $Pengumuman->Isi = $request->Isi;

        $Pengumuman->save();

        return redirect()->route('pengumuman.index')
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
        $Pengumuman=Pengumuman::find($id);
        $Pengumuman->delete();
        return redirect()->route('pengumuman.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
