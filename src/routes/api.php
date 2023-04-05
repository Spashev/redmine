<?php

use App\Http\Controllers\Api\RedmineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('redmine', RedmineController::class);
