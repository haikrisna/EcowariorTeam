<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananditolakController extends Controller
{
    /**
     * Menampilkan halaman dashboard.
     *
     * @return \Illuminate\View
     */
    public function index()
    {
        return view('pesananditolakvendor');
    }
}