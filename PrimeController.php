<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeController extends Controller
{
    public function index()
    {
        return view('prime');
    }

    public function findPrimes(Request $request)
    {
        $request->validate([
            'start' => 'required|integer|min:0',
            'end' => 'required|integer|min:0|gte:start',
        ]);

        $start = $request->input('start');
        $end = $request->input('end');

        $primes = $this->getPrimesInRange($start, $end);

        return view('prime', ['primes' => $primes, 'start' => $start, 'end' => $end]);
    }

    private function getPrimesInRange($start, $end)
    {
        $primes = [];
        for ($i = $start; $i <= $end; $i++) {
            if ($this->isPrime($i)) {
                $primes[] = $i;
            }
        }
        return $primes;
    }

    private function isPrime($number)
    {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
