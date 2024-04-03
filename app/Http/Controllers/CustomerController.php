<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        echo "Alamat Saya di Jakarta!!";
    }

    public function getName($name){
        echo "Nama saya adalah " . $name;
    }

    public function getStudent($name,$code){
        echo "Nama saya adalah " . $name;
        echo "<br>";
        echo "NIM saya adalah " . $code;
    }

    public function getCity($city){
        echo "Kota kelahiran saya di " . $city;
    }

    
}
