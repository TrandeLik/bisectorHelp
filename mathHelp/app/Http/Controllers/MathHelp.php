<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathHelp extends Controller
{
    public function firstBisector(Request $request)
    {
        $a = "";
        if ($request->has('a')) {
            $a = $request->a;
        }
        $b = "";
        if ($request->has('b')) {
            $b = $request->b;
        }
        $y = "";
        if ($request->has('y')) {
            $y = $request->y;
        }
        $answer = 0;
        if (($a != '') and ($b != '') and ($y != '')) {
            $answer = (2 * $a * $b * cos($y / 2 * pi() / 180)) / ($a + $b);
        }
        return view('firstBisect', compact("a", "b", "y", "answer"));
    }
}
