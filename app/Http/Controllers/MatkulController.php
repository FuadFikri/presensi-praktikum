<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Matkul;
use Session;
use Alert;
use Validator;

class MatkulController extends Controller
{
 
    public function index_matkul()
    {
        $matkuls = Matkul::get();
        return view('admin/matkul',['matkuls'=>$matkuls]);
    }

    public function store_matkul(Request $request)
    {
        // $validation = Validator::make($request->all(), [
        //     'nama' =>'required|min:3|max:30',
        //     'email' => 'required|min:5|email',
        //     'password' => 'required|min:8'
        //     // 'password_confirmation' => 'required|same:password'
        // ])->validate();

        $matkul = Matkul::create([
            'nama' => $request->nama,
            'kode_vmk' => $request->kode_vmk,
            'sks' => $request->sks, 
        ]);
        Alert::success('Success Message', 'Optional Title');
        return redirect('admin/matkul');
    }

   
    public function show_matkul($id)
    {
        $matkul = Matkul::find($id);
        // dd($asprak->praktikums);
        return view('admin/detail_matkul',['matkul'=>$matkul]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_matkul($id)
    {
        $matkul = Matkul::find($id);
        return view('admin/edit_matkul',['matkul'=>$matkul]);
    }

    public function update_matkul(Request $request, $id)
    {
        $matkul = Matkul::find($id);
        $matkul->nama = $request->nama;
        $matkul->kode_vmk = $request->kode_vmk;
        $matkul->sks = $request->sks;
        $matkul->save();
        return redirect('admin/matkul');
    }

    public function delete_matkul($id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete();
        return redirect('admin/matkul');
    }

    // ============= CRUD Data master Dosen ====================//
    // nama model = Dosen
    
    
    
    
    
    
    // ============= CRUD Data master Matkul ====================//
    // nama model = Matkul





}

