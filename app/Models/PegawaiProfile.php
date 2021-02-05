<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PegawaiProfile extends Model
{
    protected $table = "pegawai_profiles";

    protected $fillable = [
        'nama_lengkap',
        'alamat',
        'no_telp',
        'jabatan'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
