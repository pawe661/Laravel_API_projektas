<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImageController;
//blogai cia tau nurodziau


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

// Route::apiResource('images', ImageController::class);
// o jei nori tuo labiau iprastiniu budu
Route::apiResource('images', 'App\Http\Controllers\ImageController');

//arba taip kaip rodziau per paskaitas arba Route::apiResource('images', 'App\Http\Controllers\ImageController');
