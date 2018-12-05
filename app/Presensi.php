<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    
    protected $fillable=['user_id','jadwal_id','praktikum_id','status'];
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
