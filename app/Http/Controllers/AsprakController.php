<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Praktikum;
use App\Jadwal;
use App\Dosen;
use App\User;
use App\Presensi;
use App\Matkul;
use PDF;


class AsprakController extends Controller
{
    public function index()
    {
        $matkuls = Matkul::all();
        $dosens = Dosen::All();
        $user = User::find(Auth()->user()->nama); // $user = TODO dapatkan user aktif
        $praktikums = Praktikum::where('created_by',2)->get();
        return view('asprak.home', ['praktikums'=>$praktikums, 'dosens'=>$dosens,'matkuls'=>$matkuls,'user'=>$user]);
    }

    public function create_praktikum(Request $request){
            $praktikum = New Praktikum;
            $asprak = User::find(2); //TODO dapatkan user aktif
            $praktikum['kelas'] = $request->kelas;
            $praktikum['created_by'] = 2; // $user = TODO dapatkan user aktif
            $praktikum['kode_masuk'] = \str_random(5);

            $matkul = Matkul::where('id',$request->matkul)->first();
            $praktikum->matkul()->associate($matkul);   
            
            $dosen = Dosen::where('id',$request->dosen)->first();
            $praktikum->dosen()->associate($dosen);
            
            $praktikum->save(); 
            // $praktikum->users()->attach($asprak); //asprak adalah anggota praktikum
            // $praktikum->save(); 
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
        $praktikum = Praktikum::find($request->praktikum_id);
        // dd($praktikum->id);
        $anggota_praktikum = $praktikum->users;
        foreach($anggota_praktikum as $a)
        {
            $presensi = Presensi::create([
                'jadwal_id' => $jadwal->id,
                'user_id' => $a->id,
                'praktikum_id' => $praktikum->id
            ]);
        }
        
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
        // dd($anggota_praktikum);
        $presensi = Presensi::where('jadwal_id',$jadwal->id)->get();
        
        return view('asprak/presensi',['praktikans' => $anggota_praktikum,'jadwal'=>$jadwal,'presensi'=>$presensi]);
    }

    public function check_presensi()
    {
        $praktikan_id = $_GET['praktikan'];
        $jadwal_id = $_GET['jadwal'];
        
        $presensi = Presensi::where('jadwal_id',$jadwal_id)->where('user_id',$praktikan_id)->first();
        $presensi->status=1;
        $presensi->save();
        
        return response()->json([
            'success' => true,
            'message' => 'success',
            'data'=> $presensi
        ],200);
    }

    public function reset_presensi()
    {
        $jadwal_id = $_GET['jadwal_id'];
        $presensis = Presensi::where('jadwal_id',$jadwal_id)->get();
        foreach ($presensis as $p) {
            $p->status = 0;
            $p->feedback=null;
            $p->save();
        }
        return redirect(url('asprak/'.$jadwal_id.'/presensi'));
    }

    public function get_feedback($praktikum_id,$jadwal_id)
    {
        $praktikum = Praktikum::find($praktikum_id);
        $jadwal = Jadwal::find($jadwal_id);
        $presensis =  $jadwal->presensis;
        $pdf = PDF::loadView('asprak.feedback', compact('praktikum','presensis','jadwal'));
        return $pdf->download($praktikum->matkul->nama.'_feedback.pdf');
        // return view('asprak.feedback',['praktikum'=>$praktikum,'presensis'=>$presensis,'jadwal'=>$jadwal]);
    }

    public function email($praktikum_id,$jadwal_id)
    {
        $praktikum = Praktikum::find($praktikum_id);
        $jadwal = Jadwal::find($jadwal_id);
        $presensis =  $jadwal->presensis;
        return view('asprak.send_email',compact('praktikum','presensis','jadwal'));
    }

    public function profile()
    {
        $data['user'] = User::where('id',Auth()->user()->id)->first();
        return view('asprak.profile',$data);
    }
    
    public function editprofile(Request $request,$id)
    {
        $user = User::find($id);

        $user->nama = $request->name;
        $user->nim  = $request->nim;
        $user->hp = $request->hp;
        $user->update();
        return redirect()->back();
    }
}
