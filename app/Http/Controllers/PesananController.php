<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Menampilkan halaman dashboard.
     *
     * @return \Illuminate\View
     */

    public function permintaan_user(){
        return view('permintaanpesananuser');
    }

    public function pesanan_masuk()
    {
        return view('pesananmasukvendor');
    }

    public function proses_pesanan(){
        return view('pesanandalamproses');
    }
    
    public function tolak_pesanan()
    {
        return view('pesananditolakvendor');
    }

    public function tolak_pesananuser()
    {
        return view('pesananditolakuser');
    }

    public function perjalanan_pesanan(){
        return view('pesanandalamperjalanan');
    }
}