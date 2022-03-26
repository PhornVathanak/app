<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/loginpage', function(){
    return view('loginpage');
});
Route::post('/login','UserController@login');
Route::get('/sucesspage', function(){
    return view('sucessfully');
});
Route::get('/test', [UserController::class, 'test']);