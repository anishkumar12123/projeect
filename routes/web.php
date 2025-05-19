<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\ProjectController;

Route::get('/add-project', [ProjectController::class, 'create']);
Route::post('/store-project', [ProjectController::class, 'store']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/edit-project/{id}', [ProjectController::class, 'edit']);
Route::post('/update-project/{id}', [ProjectController::class, 'update']);
Route::get('/delete-project/{id}', [ProjectController::class, 'destroy']);
