<?php

namespace App\Models;

use App\Models\Daftar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    protected $fillable = [
        'id',
        'nama_dokter',
        'jam_praktek',
        'hari_praktek',
        'kuota',

    ];

    public function daftar()
    {
        return $this->hasMany(Daftar::class);
    }
}
