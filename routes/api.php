<?php

use App\Todo;
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
Route::get('/todos','Api\TodoController@index');
Route::get('/todo/{id}','Api\TodoController@show');
Route::post('/create/todo','Api\TodoController@store');
Route::post('/update/todo/{id}','Api\TodoController@update');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
