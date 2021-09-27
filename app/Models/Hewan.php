<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;
    protected $table = "hewan";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_pemilik',
        'jenis_hewan',
        'riwayat_penyakit',
        'usia',
        'alamat'
    ];

    public function rekammedis()
    {
        return $this->hasOne('App\RekamMedis');
    }
}
