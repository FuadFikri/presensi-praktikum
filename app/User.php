<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'nama', 'email', 'password','nim','role_id','token','status',
    ];


    public function praktikums()
    {
        return $this->belongsToMany(Praktikum::class,Keanggotaan::class);
    }
}
