<?php

use App\Http\Controllers\PlussController;
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

Route::get('/pluss', [PlussController::class, 'index']);
Route::get('/pluss/{id}', [PlussController::class, 'show']);
Route::post('/pluss', [PlussController::class, 'store']);
Route::put('/pluss/{id}', [PlussController::class, 'update']);
Route::delete('/pluss/{id}', [PlussController::class, 'destroy']);
