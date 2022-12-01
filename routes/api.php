<?php

use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UserController::class)->group(function(){
    Route::post('register', 'register');
    Route::get('user/{user}', 'show');
    Route::get('user/{user}/preference', 'show_preferences');
    Route::get('user/{user}/exercises', 'show_exercises');
    Route::post('users/{user}/messages/{messages}/book', 'bookEvent');
    Route::get('user/{user}/messages', 'listMessages');
    Route::get('user/{user}/exercises', 'show_exercises');
    Route::get('user/{user}/origen', 'origen');
    Route::get('user/{user}/destino', 'destino');
});

Route::controller(PreferencesController::class)->group(function() {
    Route::post('preferences', 'store');
    Route::get('preferences/{preferences}', 'show');
    Route::get('preferences/{preferences}/user', 'show_user');
});

//ExercisesController routing
Route::controller(ExercisesController::class)->group(function() {
    Route::post('exercise', 'store');
    Route::get('exercise/{exercise}', 'show');
    Route::get('exercise/{exercise}/user', 'show_user');
});

//MessagessController routing
Route::controller(MessagesController::class)->group(function() {
    Route::post('messages', 'store');
});
