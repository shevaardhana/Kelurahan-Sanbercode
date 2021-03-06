<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pegawai_profile()
    {
        return $this->hasOne('App\Models\PegawaiProfile', 'user_id', 'id');
    }

    // public function author()
    // {
    //     return $this->hasMany('App\Models\News', 'user_id', 'id');
    // }

    public function berita()
    {
        return $this->hasMany('App\Models\News', 'user_id', 'id');
    }

    // public function  news(){
    //     return $this->hasMany('App\Models', 'user_id');
    // }
}
