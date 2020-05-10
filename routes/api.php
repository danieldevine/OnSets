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

//GET routes
Route::get('v1/games/', 'API\GameController@getGames');
Route::get('v1/rounds/', 'API\RoundController@getRounds');
Route::get('v1/players/', 'API\PlayerController@getPlayers');
Route::get('v1/nodes/', 'API\NodeController@getNodes');

Route::get('v1/node/{id}', 'API\NodeController@getNode');
Route::post('v1/node', 'API\NodeController@createNode');