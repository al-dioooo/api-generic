<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PermissionRoleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

// Application
Route::apiResource('application', ApplicationController::class);

// Currency
Route::apiResource('currency', CurrencyController::class);

// User
Route::apiResource('user', UserController::class)->scoped([
    'user' => 'phone'
])->except('update');
Route::patch('user/{user:id}', [UserController::class, 'update']);

// Permission
Route::apiResource('permission', PermissionController::class);

// Role
Route::apiResource('role', RoleController::class);
Route::apiResource('role/map', PermissionRoleController::class)->parameter('map', 'permissionRole');

// Branch
Route::get('/branch', [BranchController::class, 'index']);
Route::get('/branch/by', [BranchController::class, 'getByUser']);
Route::get('/branch/{branch}', [BranchController::class, 'show']);
Route::post('/branch/store', [BranchController::class, 'store']);
Route::patch('/branch/update', [BranchController::class, 'update']);
Route::delete('/branch/destroy', [BranchController::class, 'destroy']);
