<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    protected $table = "tbl_antrian";
    public $timestamps = false;
    // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'no_antrian',
        'tanggal',

    ];
}
