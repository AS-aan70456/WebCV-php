<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVControlle extends Controller
{
    public function index(){
        return view('CV');
    }
}
