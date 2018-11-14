<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
