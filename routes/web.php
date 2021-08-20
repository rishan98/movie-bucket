<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Route::view('/homepage','homePage');
Route::view('/aboutus','aboutUs');


Route::get('/action',[MovieController::class,'showaction']);
Route::get('/sciencefic',[MovieController::class,'showscience']);
Route::get('/horror',[MovieController::class,'showhorror']);
Route::get('/search/{id}',[MovieController::class,'searchmovie']);
Route::post('/data',[MovieController::class,'search']);