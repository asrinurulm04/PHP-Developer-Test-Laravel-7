<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function index(){ // halaman untuk mengakses API dari global
        return view('api_global');
    }

    public function index_local(){ // halaman untuk mengakses API dari Local
        return view('api_local');
    }
}
