<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = [ 'tag_name' ];

    protected $hidden = [];

    public function news()
    {
        return $this->belongsToMany('App\Models\News', 'news_tag', 'news_id', 'tag_id');
    }
}
