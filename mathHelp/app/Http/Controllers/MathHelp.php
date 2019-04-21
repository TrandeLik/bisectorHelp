<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathHelp extends Controller{
    public function firstBisector(Request $request){
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

    public function secondBisector(Request $request){
        $a = "";
        if ($request->has('a')) {
            $a = $request->a;
        }
        $b = "";
        if ($request->has('b')) {
            $b = $request->b;
        }
        $c = "";
        if ($request->has('c')) {
            $c = $request->c;
        }
        $answer = 0;
        if (($a != '') and ($b != '') and ($c != '')) {
            $answer = sqrt($a * $b * ($a + $b + $c) * ($a + $b - $c)) / ($a + $b);
        }
        return view('secondBisect', compact("a", "b", "c", "answer"));
    }
    public function thirdBisector(Request $request){
        $a = "";
        if ($request->has('a')) {
            $a = $request->a;
        }
        $b = "";
        if ($request->has('b')) {
            $b = $request->b;
        }
        $d = "";
        if ($request->has('d')) {
            $d = $request->d;
        }
        $e = "";
        if ($request->has('e')) {
            $e = $request->e;
        }
        $answer = 0;
        if (($a != '') and ($b != '') and ($d != '') and ($e != '')) {
            $answer = sqrt($a * $b - $e * $d);
        }
        return view('thirdBisect', compact("a", "b", "d","e", "answer"));
    }

}
