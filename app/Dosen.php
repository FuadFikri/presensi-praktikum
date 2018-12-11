<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    
	protected $fillable = [
        'nama', 'nip', 'telp',
    ];


    public function praktikums(){
        return $this->hasMany('App\Praktikum');
    }
}
