<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Alert;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_asprak()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_asprak(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'nim'=> 'required',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6',
        // ]);
        // dd($validatedData);
        // dd($request);
        $asprak = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nim' =>$request->nim,
            'role_id' => 2
        ]);
        Alert::success('Success Message', 'Optional Title');
        return redirect('admin/asprak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    public function update_asprak(Request $request, $id)
    {
        //
    }

    public function delete_asprak($id)
    {
        $asprak = User::find($id);
        dd($asprak);
        $asprak->destroy();
        return redirect('admin/asprak');
    }
}
