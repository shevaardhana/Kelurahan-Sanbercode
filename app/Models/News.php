<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'descriptions',
        'date'
    ];

    protected $hidden = [];

    public function galleries() {
        return $this->hasMany(Image::class, 'news_id', 'id');
    }
}
