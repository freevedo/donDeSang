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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
// Route::get('/create_alert', 'App\Http\Controllers\PagesController@create_alert');
//Route::middleware(['auth:sanctum', 'verified'])->get('/');




Route::group(['middleware' => 'auth'], function () {

    Route::resource('alert', 'App\Http\Controllers\AlertController');
    Route::view('/test', 'dashboard');
    
});

