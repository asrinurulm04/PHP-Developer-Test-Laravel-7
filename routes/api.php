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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bootcamp','BootcampController@get_all_bootcamp'); //Read
Route::post('add','BootcampController@insert_data'); // Create
Route::put('update/{id}','BootcampController@update_data'); // Update
Route::delete('delete/{id}','BootcampController@delete'); // Delete