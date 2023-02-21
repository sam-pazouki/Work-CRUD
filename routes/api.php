<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;



Route::get('/employees',[App\Http\Controllers\EmployeeController::class, 'index']);
Route::post('/save',[App\Http\Controllers\EmployeeController::class, 'store']);

Route::put('/update/{id}',[App\Http\Controllers\EmployeeController::class, 'update']);
Route::delete('/delete/{id}',[App\Http\Controllers\EmployeeController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
