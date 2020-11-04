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

// Tickets
Route::resource('/tickets', 'Tickets\TicketsController');
Route::resource('/tickets/store', 'Tickets\TicketsController');

// Users
//Route::resource('/users', 'Users\UserController');
Route::resource('/user/store', 'Users\UserController');




Route::middleware('auth:api')->group( function () {
    Route::resource('/users', 'Users\UserController');
});

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

