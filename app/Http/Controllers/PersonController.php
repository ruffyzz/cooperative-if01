<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        $name = "Rafi Aryasuta";
        $grade = 75;
        return view('people.index',compact('name','grade'));
    }
}
