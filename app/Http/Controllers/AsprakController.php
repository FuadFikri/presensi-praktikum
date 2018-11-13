<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Praktikum;
use App\Jadwal;
use App\Dosen;
use App\User;

class AsprakController extends Controller
{
    public function index()
    {
        $praktikums = Praktikum::all();
        $dosen = Dosen::All();
        return view('asprak.home', ['praktikums'=>$praktikums, 'dosen'=>$dosen]);
    }

    public function create_praktikum(Request $request){
            $praktikum = New Praktikum;
            $praktikum['nama'] = $request->nama;
            $praktikum['kode_vmk'] = $request->kode_vmk;
            $praktikum['sks'] = $request->sks;
            $praktikum['kelas'] = $request->kelas;
            $praktikum['created_by'] = 1;

            $dosen = Dosen::where('id',$request->dosen)->first();
            $praktikum->dosen()->associate($dosen);
            $praktikum->save(); 
        return "success";
    }

    public function show_praktikum($id){
        $praktikum = Praktikum::findOrFail($id);
        
        return view('asprak/praktikum',['praktikum'=>$praktikum]);
    }
    
}
