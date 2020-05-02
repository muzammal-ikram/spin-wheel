<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpinController extends Controller
{
    public function index(){
        return view('spin.index');
    }
}
