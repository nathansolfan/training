<?php

use App\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CrudController::class, 'index']);

// Route::post('/form', function (Request $request) {
//     return dd($request->all());
// });

Route::post('/form', [CrudController::class, 'store']);

Route::get('/users/{$user}', [CrudController::class, 'show']);