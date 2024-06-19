<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeapYearController extends Controller
{
    public function calculate(Request $request)
    {
        $startYear = (int) $request->input('start_year');
        $endYear = (int) $request->input('end_year');
        $leapYears = [];

        if ($startYear > $endYear) {
            return view('error', ['message' => 'Tahun awal harus lebih kecil atau sama dengan tahun akhir.']);
        }

        for ($year = $startYear; $year <= $endYear; $year++) {
            if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
                $leapYears[] = $year;
            }
        }

        return view('result', ['leapYears' => $leapYears]);
    }
}
