<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\PaymentController;


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

// Public routes
Route::post('/login', [AuthController::class, 'login']);



// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::any('/userdetail', [UserController::class, 'userDetail']);
    Route::any('/serverlist', [ServerController::class, 'server_list']);
    Route::any('/add_request', [RequestController::class, 'add_request']);
    Route::any('/requestlist', [RequestController::class, 'requestlist']);
    Route::any('/add_withdraw', [WithdrawController::class, 'add_withdraw']);
    Route::any('/add_payment', [PaymentController::class, 'add_payment']);
    Route::any('/history', [HistoryController::class, 'history']);
    Route::any('/request_list', [RequestController::class, 'request_list']);
    Route::any('/withdraw_list', [WithdrawController::class, 'withdraw_list']);
    Route::any('/payment_list', [PaymentController::class, 'payment_list']);

});
