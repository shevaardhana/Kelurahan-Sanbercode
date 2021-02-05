<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = "penduduk";

    protected $fillable = [
        'nama_desa',
        'jumlah_pria',
        'jumlah_wanita',
        'jumlah_kematian',
        'jumlah_kelahiran',
        'keterangan'
    ];
}
