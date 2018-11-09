<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    

    public function praktikum()
    {
        return $this->belongsTo('App\Praktikum');
    }
}
