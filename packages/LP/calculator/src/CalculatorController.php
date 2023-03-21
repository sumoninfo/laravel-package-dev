<?php

namespace LP\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($a, $b)
    {
        echo $a + $b;
    }

    public function sub($a, $b)
    {
        echo $a - $b;
    }

    public function view()
    {
        $result = (1 + 5);
        return view('calculator::app', compact('result'));
    }
}
