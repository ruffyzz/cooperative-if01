<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo "Alamat Saya di Bandung!!";
});

Route::get('/my-city/{city?}', function ($city = "Bandung") {
    echo "Kota kelahiran saya di " . $city;
});

Route::get('/get-student/{name?}/{code?}', function ($name = "Nama Siswa",$code = "220414014") {
    echo "Nama saya adalah " . $name; 
    echo "<br> NRP " . $code;
});