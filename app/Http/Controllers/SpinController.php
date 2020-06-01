<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpinController extends Controller
{
    public function index($names = null){
        $data['name'] = $names;
        return view('spin.index', $data);
    }
    public function YesNo(){
        return view('spin.yes_no');
    }
}
