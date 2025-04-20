<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $table = 'daftar_basis_pengetahuan';

    protected $fillable = ['kode_gejala', 'kode_penyakit'];
}
