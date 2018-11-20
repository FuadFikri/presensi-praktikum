<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $fillable = ['nama','kode_vmk','sks'];
    public function praktikums()
    {
        return $this->hasMany('App\Praktikum');
    }
}
