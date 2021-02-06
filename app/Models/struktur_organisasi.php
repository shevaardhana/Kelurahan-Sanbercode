<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class struktur_organisasi extends Model
{
    use SoftDeletes;
    protected $table = "struktur_organisasi";
    protected $fillable = [ 'image' ];
}
