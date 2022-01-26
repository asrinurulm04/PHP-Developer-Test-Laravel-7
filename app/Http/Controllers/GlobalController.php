<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function index(){
        return view('api_global');
    }

    public function index_local(){
        return view('api_local');
    }
}
