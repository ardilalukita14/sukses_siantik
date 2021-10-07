<?php

namespace App\Http\Controllers;
use App\Models\Daftar;
use App\Models\Dokter;

use Illuminate\Http\Request;

class DataPasienAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $dokters = Dokter::all();
            $daftars = Daftar::where('nama_pemilik', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $daftars = Daftar::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
            $dokters = Dokter::all();
        }
        return view('dataPasienAdmin.index', compact('daftars', 'dokters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Daftar = Daftar::find($id);
        $Dokter = Dokter::find($id);
        return view('dataPasienAdmin.detail', compact('Daftar', 'Dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Daftar = Daftar::find($id);
        $dokter = Dokter::all();

        return view('dataPasienAdmin.edit', compact('Daftar', 'dokter'));
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
        $request->validate([
            'tanggal' => 'required',
            'dokter' => 'required',
        ]);

        $daftars = Daftar::find($id);

        $daftars->tanggal = $request->get('tanggal');
       
        $dokter = Dokter::find($request->get('dokter'));

        $daftars->dokter()->associate($dokter);
        $daftars->save();

        return redirect()->route('dataPasienAdmin.index')
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
            $Daftar=Daftar::find($id)->delete();
            return redirect()->route('dataPasienAdmin.index')
                ->with('success', 'Data Berhasil Dihapus');
        }
    }

