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

// Curricula

Route::get('curricula', "App\Http\Controllers\curriculaController@index");
Route::post('curriculum/register', "App\Http\Controllers\curriculaController@store");
Route::patch('curriculum/{curriculum}', "App\Http\Controllers\curriculaController@update");
Route::delete('curriculum/{curriculum}', "App\Http\Controllers\curriculaController@remove");

// Mails

Route::get('/send/email', 'MailController@mail');