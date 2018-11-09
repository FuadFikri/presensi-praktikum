<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praktikum extends Model
{
    

    public function jadwals()
    {
        return $this->hasMany('App\Jadwal');
    }
}
