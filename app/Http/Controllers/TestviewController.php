<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestviewController extends Controller
{
    public function index(){
        return view(('dompetvendor'));
    }
}
