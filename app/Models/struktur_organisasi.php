<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class struktur_organisasi extends Model
{
    protected $table = "struktur_organisasi";
    protected $fillable = [
        'id',
        'image',
    ];
}
