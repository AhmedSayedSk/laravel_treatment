<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post("save-doctor-book",[\App\Http\Controllers\HomeController::class,'saveDoctorBook'])->name("save-doctor-book");
Route::post("save-drug-book",[\App\Http\Controllers\HomeController::class,'saveDrugBook'])->name("save-drug-book");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
