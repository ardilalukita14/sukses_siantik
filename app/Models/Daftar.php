<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $table = "daftar";
    public $timestamps = false;
    // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nama_pemilik',
        'jenis_hewan',
        'usia',
        'tanggal',
        'alamat',
        'id_dokter',
    ];

    public function dokter()
    {
        return $this->belongsTo(dokter::class);
    }
}
