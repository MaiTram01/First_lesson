<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTong extends Controller
{
    public function index()
    {
        return view('tong');
    }

    public function tinhTong(Request $request)
    {
        $a = $request->input('a', 0);
        $b = $request->input('b', 0);
        $tong = $a + $b;

        return view('tong', compact('a', 'b', 'tong'));
    }
}
