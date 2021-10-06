<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\dokter;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->get('cari');
        if ($cari) {
            $daftar = Daftar::with('dokter');
            $paginate = Daftar::orderBy('nama_pemilik', 'asc')->where("nama_pemilik", "LIKE", "%$cari%")->paginate(5);
        } else {
            $daftar = Daftar::with('dokter');
            $paginate = Daftar::orderBy('nama_pemilik', 'asc')->paginate(5);
        }
        return view('cek_pendaftar', ['daftar' => $daftar, 'paginate' => $paginate]);
    }

    public function create()
    {
        $dokter = dokter::all();
        return view('form_advanceds', ['dokter' => $dokter]);
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_pemilik' => 'required',
        // 'jenis_hewan' => 'required',
        // 'usia' => 'required',
        // 'tanggal' => 'required',
        // 'alamat' => 'required',
        // 'id_dokter' => 'required',
        // ]);
        // dd($request);
        Daftar::create([
            'nama_pemilik' => $request->pemilik,
            'jenis_hewan' => $request->jenis_hewan,
            'usia' => $request->usia,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'dokter_id' => $request->id_dokter,
            'kelas_id' => $request->kelas_id,

        ]);
        // $daftar = new Daftar;
        // $daftar->nama_pemilik = $request->pemilik;
        // $daftar->jenis_hewan = $request->jenis_hewan;
        // $daftar->usia = $request->usia;
        // $daftar->tanggal = $request->tanggal;
        // $daftar->alamat = $request->alamat;
        // $daftar->id_dokter = $request->id_dokter;
        // $daftar->save();
        return view('index');
    }
}
