<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'daftar_gejala';

    protected $fillable = ['nama_gejala', 'kode_gejala'];
}
