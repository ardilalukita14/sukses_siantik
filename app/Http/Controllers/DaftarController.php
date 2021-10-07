<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Daftar;
use App\Models\dokter;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

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
        return view('pendaftaran', ['dokter' => $dokter]);
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

        return redirect('/antrian')
            ->with('success', 'Data Berhasil Ditambahkan');
        // return redirect('/form-new-pasien')
        //     ->with('success', 'Data Berhasil Disimpan ');
    }
    public function antrian()
    {
        $antrian = Antrian::all();
        $nomer = Antrian::max('no_antrian');

        if ($antrian) {
            $jumlah = $nomer + 1;
        } else {
            $jumlah = 1;
        }
        Antrian::create([
            'no_antrian' => $jumlah,
            'tanggal' =>  Carbon::now()
        ]);
        $jml = Antrian::orderBy('no_antrian', 'desc')->paginate(1);
        return view('antrian.index', compact('jml'));
    }
    // public function cetak_pdf($id)
    // {
    //     $jml = Antrian::orderBy('no_antrian', 'desc')->where('id', $id)->first();
    //     $pdf = PDF::loadview('antrian.cetak_pdf', ['jml' => $jml]);
    //     return $pdf->stream();
    // }
    public function reset()
    {
        $data = Antrian::find(34);
        $data->delete();
        return redirect('/');
    }
    public function antrianAdmin()
    {
        $data = Antrian::paginate(5); // Pagination mengambil 5 data
        return view('antrian.indexAdmin', compact('data'));
    }
}
