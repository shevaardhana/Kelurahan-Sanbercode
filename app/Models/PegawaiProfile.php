<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PegawaiProfile extends Model
{
    use SoftDeletes;
    
    protected $table = "pegawai_profiles";

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nip',
        'pangkat',
        'jabatan',
        'alamat',
        'no_telp',
        'photo'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
