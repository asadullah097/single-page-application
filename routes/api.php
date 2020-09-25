<?php

use Illuminate\Http\Request;

Route::apiResource('/category','CategoryController');
Route::apiResource('/question','QuestionController');

Route::apiResource('/{question}/reply','ReplyController');
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
