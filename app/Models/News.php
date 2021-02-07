<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'kategori',
        'slug',
        'location',
        'descriptions',
        'date'
    ];

    protected $hidden = [];

    public function galleries() {
        return $this->hasMany(Image::class, 'news_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\User','user_id', 'id');
    }

    // public function tags() {
    //     return $this->belongsToMany('App\Tag','news_tag', 'news_id', 'tag_id');
    // }

    public function tags() {
        return $this->belongsToMany('App\Tag','news_tag', 'news_id', 'tag_id');
    }
}
