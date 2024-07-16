<?php

use App\Models\MandatorySaving;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\MandatorySavingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminMandatorySavingController;
use App\Http\Controllers\AdminRoleController;
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
// Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create')->middleware('auth');
// Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store')->middleware('auth');

// Route::get('/customer/{id}', [CustomerController::class, 'show'])->name('customer.show')->middleware('auth');
// Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index')->middleware('auth');
// Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit')->middleware('auth');
// Route::put('/customer/update', [CustomerController::class, 'update'])->name('customer.update')->middleware('auth');
// Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('customer.update')->middleware('auth');
// Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy')->middleware('auth');

// Route::get('/customers/{id}/export-pdf', [CustomerController::class, 'exportPdf'])->name('customer.exportPdf')->middleware('auth');

Route::resource('/customer', CustomerController::class)->middleware('auth');
Route::resource('mandatory-saving', MandatorySavingController::class)->middleware('auth');
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);
Route::resource('/admin-customer', AdminCustomerController::class)->middleware('admin');
// Route::get('/dashboard', function(){
//     return view ('customer.index');
// })->middleware('auth');
Route::resource('admin-mandatory-saving', AdminMandatorySavingController::class)->middleware('admin');
Route::resource('/admin-role', AdminRoleController::class)->middleware('admin');

