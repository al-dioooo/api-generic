<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('application', ApplicationController::class);
Route::apiResource('currency', CurrencyController::class);

Route::get('/branch', [BranchController::class, 'index']);
Route::get('/branch/by', [BranchController::class, 'getByUser']);
Route::get('/branch/{branch}', [BranchController::class, 'show']);
Route::post('/branch/store', [BranchController::class, 'store']);
Route::patch('/branch/update', [BranchController::class, 'update']);
Route::delete('/branch/destroy', [BranchController::class, 'destroy']);
