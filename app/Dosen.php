<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    



    public function praktikums(){
        return $this->hasMany('App\Praktikum');
    }
}
