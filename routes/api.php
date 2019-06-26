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


//跨域
Route::options('/{all}', function (Request $request) {
    $origin = $request->header('ORIGIN', '*');
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Headers: Origin, Access-Control-Request-Headers, SERVER_NAME, Access-Control-Allow-Headers, cache-control, token, X-Requested-With, Content-Type, Accept, Connection, User-Agent, Cookie');
})->where(['all' => '.*']);


Route::any('/v1/check', 'Api\ItemController@swift');
Route::any('/v1/getjl', 'Api\RecordController@index');
Route::any('/v1/jl', 'Api\RecordController@record');
Route::any('/v1/drivingQuestion', 'Api\DrivingQuestionsController@drivingQuestion');
Route::any('/v1/drivingQuestionEn', 'Api\DrivingQuestionsController@drivingQuestionEn');

Route::any('/v1/tr', 'Api\TranslateController@googleTranslate');
Route::any('/v1/dtranslate', 'Api\TranslateController@dtranslate');


Route::any('/v1/req', 'Api\RequestController@convertRequest');
