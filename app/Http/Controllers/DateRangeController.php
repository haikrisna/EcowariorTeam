<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\CarbonPeriod;

class DateRangeController extends Controller
{
    public function index()
    {
        return view('daterange');
    }

    public function identifyWeekends(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $period = CarbonPeriod::create($startDate, $endDate);

        $weekends = [];
        foreach ($period as $date) {
            if ($date->isSaturday() || $date->isSunday()) {
                $weekends[] = $date->format('Y-m-d');
            }
        }

        return view('daterange.result', compact('weekends', 'startDate', 'endDate'));
    }
}
