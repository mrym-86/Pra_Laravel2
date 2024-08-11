<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\FurnitureController;
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

Route::get('/login',function(){
    return view('auth.custom_login');
})->name('login');

Route::post('/login',[AuthenticatedSessionController::class,'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Route::get('/furniture','App\Http\Controllers\FurnitureController@index')->name('furniture.index');

//Route::get('/furniture/about',[FurnitureController::class, 'about'])->name('furniture.about');

// Route::get('/furniture/Company','App\Http\Controllers\FurnitureController@company')->name('furniture.company');

// Route::get('/furniture/Item_Registration','App\Http\Controllers\FurnitureController@Item_Registration')->name('furniture.Item_Registration');
/*resource→indexとかの7個セットのこと、これまとめて書いておけばOKみたいなやつ*/
Route::resource('furniture', FurnitureController::class);

/*一緒に読み込むよって意味*/
require __DIR__.'/auth.php';
