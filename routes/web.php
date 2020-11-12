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

Route::get("/cars/all",'\App\Http\Controllers\CarController@getAllCars')->name("cars.all");
Route::post("/cars/create",'\App\Http\Controllers\CarController@createNewCar')->name("cars.create");
Route::get("/cars/edit/{id}",'\App\Http\Controllers\CarController@editCar')->name("cars.edit");
Route::post("/cars/update",'\App\Http\Controllers\CarController@updateCar')->name("cars.update");