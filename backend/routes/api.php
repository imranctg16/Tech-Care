<?php

use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\LoginController;
use App\Http\Controllers\API\V1\TweetController;
use Illuminate\Foundation\Testing\WithoutMiddleware;
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

// api/v1
Route::group(['prefix' => 'v1', 'middleware' => ['api', 'refresh_token']], function () {
  // authorization routes
  Route::controller(AuthController::class)->group(function () {
    Route::POST('auth/login', 'login')->WithoutMiddleware(['refresh_token']);
  });
  // tweet routes 
  Route::controller(TweetController::class)->group(function () {
    Route::POST('tweets', 'store');
  });
  




});
