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

// Users
Route::resource('/users', 'Users\UserController');
Route::post('/users/tickets', 'Users\UserController@userTickets');

// Events
Route::resource('/events', 'Events\EventController');

