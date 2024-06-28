<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard_vendor(){
        return(view('dashboardvendor'));
    }
    public function dashboard_user(){
        return(view('dashboarduser'));
    }
}
