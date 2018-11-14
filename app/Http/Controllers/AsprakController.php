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
        return redirect(url('asprak'));
    }

    public function show_praktikum($id){
        $praktikum = Praktikum::findOrFail($id);
        
        return view('asprak/praktikum',['praktikum'=>$praktikum]);
    }
    
    // ================================JADWAL========================================

    public function index_jadwal($id)
    {
        $praktikum = Praktikum::findOrFail($id);
        $jadwals = Jadwal::where('praktikum_id',$id)->get();
        return view('asprak/praktikum',['praktikum'=>$praktikum  , 'jadwals'=>$jadwals]);
    }
    public function presensi_jadwal()
    {

    }
    public function feedback_jadwal()
    {

    }
    public function store_jadwal(Request $request)
    {
        $jadwal = Jadwal::create([
            'tanggal' => $request->tanggal,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'materi' => $request->materi,
            'praktikum_id' => $request->praktikum_id,
        ]);
        if ($jadwal) {
            return redirect(url('asprak/praktikum/'.$request->praktikum_id));
        }
    }
    public function edit_jadwal()
    {

    }
    public function update_jadwal()
    {

    }
    public function delete_jadwal(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect(url('asprak/praktikum/'.$request->praktikum_id));
    }
    

}
