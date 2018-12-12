<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use Session;
use Alert;
use Validator;

class DosenController extends Controller
{
    public function index()
    {
        $dosens=Dosen::paginate(5);
        return view('admin/dosen',compact('dosens'))->with('i',(request()->input('page',1) -1)*10);
    }

    public function store_dosen(Request $request)
    {
        // $validation = Validator::make($request->all(), [
        //     'nama' =>'required|min:3|max:30',
        //     'email' => 'required|min:5|email',
        //     'password' => 'required|min:8'
        //     // 'password_confirmation' => 'required|same:password'
        // ])->validate();

        $dosen = Dosen::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'telp' => $request->telp
        ]);
        Alert::success('Success Message', 'Optional Title');
        return redirect('admin/dosen');
    }

    public function show_dosen($id)
    {
        $dosen = Dosen::find($id);
        // dd($asprak->praktikums);
        return view('admin/detail_dosen',['dosen'=>$dosen]);
    }

    public function edit_dosen($id)
    {
        $dosen = Dosen::find($id);
        return view('admin/edit_dosen',['dosen'=>$dosen]);
    }


    public function update_dosen(Request $request, $id)
    {
        $dosen = Dosen::find($id);
        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->telp = $request->telp;
        
        $dosen->save();
        return redirect('admin/dosen');
    }

    public function delete_dosen($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('admin/dosen');
    }
}
