<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    
    protected $table = 'daftar_penyakit';

    protected $fillable = ['nama_penyakit', 'kode_penyakit'];
}
