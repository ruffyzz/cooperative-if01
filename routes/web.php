<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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


Route::get('/nasabah/index',[CustomerController::class,'index']);

Route::get('/get-name/{name?}',[CustomerController::class,'getName']);

Route::get('/get-student/{name?}/{code?}',[CustomerController::class,'getStudent']);

Route::get('/get-city/{city?}',[CustomerController::class,'getName']);
