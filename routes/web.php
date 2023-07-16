<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', 'HomeController@index');
// Route::get('/province/{id}/cities', 'HomeController@getCities');
// Route::post('/', 'HomeController@submit');

Route::get('/',[HomeController::class,'index']);
Route::get('/province/{id}/cities',[HomeController::class,'getCities']);
Route::post('/', [HomeController::class,'submit']);