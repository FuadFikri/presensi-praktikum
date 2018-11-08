<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Praktikum;
use App\Jadwal;

class AsprakController extends Controller
{
    public function index()
    {
        return view('asprak.home');
    }

    public function create_praktikum(){

    }
    
}
