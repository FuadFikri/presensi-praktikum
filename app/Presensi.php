<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    
    protected $fillable=['user_id','jadwal_id','keterangan'];
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
