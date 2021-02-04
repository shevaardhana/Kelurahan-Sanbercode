<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use softDeletes;  

    protected $fillable = [
        'news_id', 'image' 
    ];    

    protected $hidden = [];

    public function news() {
        return $this->belongsTo('App\Models\News', 'news_id', 'id');
    }
}
