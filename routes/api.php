<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/home', function (Request $request){
    return 'Здравствуй жопа новый год';
});
Route::post('registration', [AuthController::class, 'registration']);
//Route::post('registration', [AuthController::class, 'registration']);

