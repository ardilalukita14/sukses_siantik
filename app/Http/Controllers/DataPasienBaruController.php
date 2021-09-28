<?php namespace App\Http\Controllers; 

use App\Models\Daftar; 
use Illuminate\Http\Request;

class DataPasienBaruController extends Controller
{
   /** * Display a listing of the resource.
    * 
    * @return \Illuminate\Http\Response */ public function index() { 
   //fungsi eloquent menampilkan data menggunakan pagination 
   $datas = Daftar::all(); // Mengambil semua isi tabel 
   $posts = Daftar::orderBy('nama_pemilik', 'desc')->paginate(6); 
   return view('mahasiswas.index', compact('mahasiswas')); 
   with('i', (request()->input('page', 1) - 1) * 5); }
}
