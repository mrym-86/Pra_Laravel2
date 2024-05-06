<?php

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

Route::get('/Furniture','App\Http\Controllers\FurnitureController@index')->name('Furniture.index');

Route::get('/Furniture/About','App\Http\Controllers\FurnitureController@about')->name('Furniture.about');

Route::get('/Furniture/Company','App\Http\Controllers\FurnitureController@company')->name('Furniture.company');


