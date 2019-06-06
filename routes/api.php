<?php

use Illuminate\Http\Request;
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

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
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Expose-Headers: Date');


Route::any('/v1/check', 'Api\ItemController@swift');
Route::any('/v1/jl', 'Api\RecordController@record');
Route::any('/v1/drivingQuestion', 'Api\DrivingQuestionsController@drivingQuestion');
Route::any('/v1/drivingQuestionEn', 'Api\DrivingQuestionsController@drivingQuestionEn');

