<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Praktikum;
use App\User;
use App\Jadwal;
use App\Presensi;

class PraktikanController extends Controller
{
    public function index()
    {
        $user = User::find(4); // $user = TODO dapatkan user aktif
        $praktikums = $user->praktikums;
        return view('praktikan.home',['praktikums'=>$praktikums]);
    }
    public function join_praktikum(Request $request)
    {
        $praktikum = Praktikum::where('kode_masuk',$request->kode_masuk)->first();
        if (!$praktikum) {
            return redirect(url('/praktikan'))->with('message','Kode Salah');
        }
        
        // $user = TODO dapatkan user aktif
        $user = User::find(4);
        $user->praktikums()->attach($praktikum);
        return redirect(url('/praktikan'));
    }

    public function index_jadwal($id_praktikum)
    {
        $praktikum = Praktikum::findOrFail($id_praktikum);
        $jadwals = Jadwal::where('praktikum_id',$id_praktikum)->get();
        return view('praktikan.jadwal',['praktikum'=>$praktikum,'jadwals'=>$jadwals]);
    }

    public function store_feedback(Request $request)
    {
        $jadwal = $request->jadwal_id;
        $user   = $request->user_id;
        $pesan_feedback = $request->feedback;
        $presensi = Presensi::where('jadwal_id',$jadwal)->where('user_id',$user)->first();
        $presensi->feedback = $pesan_feedback;
        $presensi->save();
        return redirect()->back();

    }
}
