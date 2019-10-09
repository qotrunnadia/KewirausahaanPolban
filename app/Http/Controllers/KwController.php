<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KwController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function pengajuan(){
        return view('pengajuan');
    }
}
