<?php

namespace App\Http\Controllers;
use Mail;
use App\Praktikum;
use App\Jadwal;
use App\Presensi;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $praktikum = Praktikum::find($request->pid);
        $jadwal = Jadwal::find($request->jid);
        $presensis =  $jadwal->presensis;
        try{
            Mail::send('asprak.email', 
            ['nama' => $request->nama, 'pesan' => $request->pesan, 'praktikum'=>$praktikum, 'jadwal'=>$jadwal,'presensis'=>$presensis], 
            function ($message) use ($request)
            {
                $message->subject($request->judul);
                $message->from('presensi.komsi@gmail.com', 'Asisten Praktikum');
                $message->to($request->email);
            });
            return back()->with('alert-success','Berhasil Kirim Email');
        }
        catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }

}
