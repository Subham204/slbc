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

// Route::get('/aa', function () {
//     return view('welcome');
// });
 Route::get('/',[App\Http\Controllers\TestController::class,'homepage']);
 Route::get('homepage',[App\Http\Controllers\TestController::class,'homepage']);
 Route::get('service',[App\Http\Controllers\TestController::class,'service']);
 Route::get('test', function () {
    return view('test');
});