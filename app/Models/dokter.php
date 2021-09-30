<?php

namespace App\Models;
use App\Models\Daftar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    
    public function daftar()
    {
        return $this->hasMany(Daftar::class);
    }
}
