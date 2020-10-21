<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

Route::get('/list-alert','App\Http\Controllers\ApiController@listAlert');
Route::post('/register','App\Http\Controllers\ApiController@register');
//Route::post('/alert','App\Http\Controllers\ApiController@addAlert');
Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'tel' => 'required',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('tel', $request->tel)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'tel' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/alert', 'App\Http\Controllers\ApiController@addAlert');

Route::middleware('auth:sanctum')->get('/alert/{id}', 'App\Http\Controllers\ApiController@alertDetail');