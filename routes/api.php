<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JWTController;

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

Route::group(['middleware' => 'api'], function($router) {
    Route::post('/register', [JWTController::class, 'register']);
    Route::post('/login', [JWTController::class, 'login']);
    Route::get('/job-list', [JWTController::class, 'jobList']);
    Route::get('/single-job', [JWTController::class, 'singleJob']);
    Route::post('/apply', [JWTController::class, 'apply']);

    
    
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
