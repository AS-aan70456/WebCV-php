<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticalController extends Controller
{
    public function index(){
        return view('Posts');
    }
}
