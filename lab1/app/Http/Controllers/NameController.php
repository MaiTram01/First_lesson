<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleNhapSV;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function show()
    { 
        return view('name');
    }
    public function displayInfor(RuleNhapSV $Request){
        $user = [
            'name' => $name = $Request->input("name"),
            'age' => $age = $Request->input("age"),
            'date' => $date = $Request->input("date"),
            'phone' => $phone = $Request->input("phone"),
            'web' => $web = $Request->input("web"),
            'address' => $address = $Request->input("address")
        ];
        return view('name')->with('user', $user);
    }
    
}
