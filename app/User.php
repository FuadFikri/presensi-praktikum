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
        return $this->belongsToMany(Praktikum::class,'keanggotaans');
    }

    public function presensis()
    {
        return $this->hasMany(Presensi::class);
    }

    public function isAdmin()
    {
        if($this->role_id == 1)return true;
            return false;
    }

    public function isAsprak()
    {
        if($this->role_id == 2)return true;
            return false;
    }

    public function isPraktikan()
    {
        if($this->role_id == 3)return true;
            return false;
    }
}
