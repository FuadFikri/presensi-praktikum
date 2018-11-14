<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable=['tanggal','mulai','selesai','materi','praktikum_id'];

    public function praktikum()
    {
        return $this->belongsTo('App\Praktikum');
    }

    public function presensis()
    {
        return $this->hasMany(Presensi::class);
    }
}
