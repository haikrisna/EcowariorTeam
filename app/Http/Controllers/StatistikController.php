<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function statistik_vendor(){
        return view('statistikvendor');
    }
}
