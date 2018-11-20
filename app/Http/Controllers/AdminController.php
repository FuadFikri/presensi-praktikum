<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Alert;
use Validator;

class AdminController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_asprak()
    {
        $aspraks = User::where('role_id',2)->get();
        return view('admin/asprak',['aspraks'=>$aspraks]);
    }

    public function store_asprak(Request $request)
    {
        // $validation = Validator::make($request->all(), [
        //     'nama' =>'required|min:3|max:30',
        //     'email' => 'required|min:5|email',
        //     'password' => 'required|min:8'
        //     // 'password_confirmation' => 'required|same:password'
        // ])->validate();

        $asprak = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // 'nim' =>$request->nim,
            'role_id' => 2
        ]);
        Alert::success('Success Message', 'Optional Title');
        return redirect('admin/asprak');
    }

   
    public function show_asprak($id)
    {
        $asprak = User::find($id);
        return view('admin/detail_asprak',['asprak'=>$asprak]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_asprak($id)
    {
        $asprak = User::find($id);
        return view('admin/edit_asprak',['asprak'=>$asprak]);
    }

    public function update_asprak(Request $request, $id)
    {
        $asprak = User::find($id);
        $asprak->nama = $request->nama;
        $asprak->email = $request->email;
        $asprak->password = bcrypt($request->password);
        $asprak->nim = $request->nim;
        
        $asprak->save();
        return redirect('admin/asprak');
    }

    public function delete_asprak($id)
    {
        $asprak = User::find($id);
        $asprak->delete();
        return redirect('admin/asprak');
    }

    // ============= CRUD Data master Dosen ====================//
    // nama model = Dosen
    
    
    
    
    
    
    // ============= CRUD Data master Matkul ====================//
    // nama model = Matkul





}

