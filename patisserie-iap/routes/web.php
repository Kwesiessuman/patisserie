<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\foodController;
use App\Http\Controllers\ordersController;

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
//index page for now
Route::get('/', function () {
    return view('welcome');
});

//page after login(auto from bree)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//food page
Route::get('/food',[foodController::class,'index']);
Route::post('/food/add',[foodController::class,'add']);
Route::post('/food/update{$id}',[foodController::class,'update']);
Route::post('/food/delete{$id}',[foodController::class,'delete']);

//order page 
Route::get('/orders',[ordersController::class,'display']);












