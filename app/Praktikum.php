<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praktikum extends Model
{
    protected $fillable = ['nama','kode_vmk','sks','kelas','dosen_id','created_by'];

    public function jadwals()
    {
        return $this->hasMany('App\Jadwal');
    }
    
    public function dosen()
    {
        return $this->belongsTo('App\Dosen');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,Keanggotaan::class);
    }
}
