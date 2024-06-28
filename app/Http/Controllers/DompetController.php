<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DompetController extends Controller
{
    public function dompet_vendor(){
        return view('dompetvendor');
    }
}
