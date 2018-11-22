<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Praktikum;
use App\Jadwal;
use App\Dosen;
use App\User;
use App\Presensi;
use App\Matkul;

class AsprakController extends Controller
{
    public function index()
    {
        $matkuls = Matkul::all();
        // $praktikums = Praktikum::all();
        $dosens = Dosen::All();
        $user = User::find(2); // $user = TODO dapatkan user aktif
        $praktikums = Praktikum::where('created_by',2)->get();
        return view('asprak.home', ['praktikums'=>$praktikums, 'dosens'=>$dosens,'matkuls'=>$matkuls]);
    }

    public function create_praktikum(Request $request){
            $praktikum = New Praktikum;
            $praktikum['kelas'] = $request->kelas;
            $praktikum['created_by'] = 2;
            $praktikum['kode_masuk'] = \str_random(5);

            $matkul = Matkul::where('id',$request->matkul)->first();
            $praktikum->matkul()->associate($matkul);   
            
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
    public function edit_jadwal($id)
    {
        $jadwal = Jadwal::where('id',$id)->first();
        // dd($jadwal);
        return view('asprak/edit_jadwal',['jadwal'=>$jadwal]);
    }
    public function update_jadwal(Request $request, $id)
    {   
        $jadwal = Jadwal::find($id);
        $jadwal->tanggal = $request->tanggal;
        $jadwal->mulai = $request->mulai;
        $jadwal->selesai = $request->selesai;
        $jadwal->materi = $request->materi;

        $jadwal->save();
        return redirect(url('asprak/praktikum/'.$request->praktikum_id));

    }
    public function delete_jadwal(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect(url('asprak/praktikum/'.$request->praktikum_id));
    }
    
    public function index_presensi($id)
    {
        $jadwal = Jadwal::find($id);
        $praktikum_id = $jadwal->praktikum_id;
        $praktikum = Praktikum::where('id',$praktikum_id)->first();
        $anggota_praktikum = $praktikum->users;
        $presensi = Presensi::where('jadwal_id',$jadwal->id)->first();
        return view('asprak/presensi',['praktikans' => $anggota_praktikum,'jadwal'=>$jadwal,'presensi'=>$presensi]);
    }

    public function check_presensi()
    {
        $praktikan_id = $_GET['praktikan'];
        $jadwal_id = $_GET['jadwal'];

        $presensi = Presensi::create([
            'jadwal_id' => $jadwal_id,
            'user_id' => $praktikan_id
        ]);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data'=> $presensi
        ],200);
    }

}
