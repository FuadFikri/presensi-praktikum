<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Praktikum;
use App\Jadwal;

class AsprakController extends Controller
{
    public function index()
    {
        $praktikums = Praktikum::all();
        return view('asprak.home', ['praktikums'=>$praktikums]);
    }

    public function create_praktikum(){

    }

    public function show_praktikum($id){
        $praktikum = Praktikum::findOrFail($id);
        $data = "halo";
        return view('asprak/praktikum',['praktikum'=>$praktikum, 'data'=>$data]);
    }
    
}
