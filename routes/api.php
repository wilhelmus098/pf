<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\AccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::get('/test', function () {
//         return 'Hello World';
//     });
// });

// Route::post('register', [AuthController::class, 'register']);

// Route::get('/login', [ 'as' => 'login'], function () {
//     return 'must login';
// });

Route::resources(['transactions' => TransactionController::class]);
Route::resources(['accounts' => AccountController::class]);
Route::resources(['categories' => CategoryController::class]);