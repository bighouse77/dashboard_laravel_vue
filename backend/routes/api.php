<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'ApiDash\HomeController@index');
Route::post('/create', 'ApiDash\HomeController@insertData');
Route::delete('/delete/{id}', 'ApiDash\HomeController@deleteData');
Route::put('/put/{dataDel}', 'ApiDash\HomeController@putData');
