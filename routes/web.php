<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AppsuserController;

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

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('user/dashboard', [AppsuserController::class, 'dashboard'])->name('user.dashboard');
   
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/request_list', [AdminController::class, 'request_list'])->name('admin.request_list');
    Route::get('admin/pending_request', [AdminController::class, 'pending_request'])->name('admin.pending_request');
    Route::get('admin/approved_request', [AdminController::class, 'approved_request'])->name('admin.approved_request');
    Route::post('admin/success_request', [AdminController::class, 'success_request'])->name('admin.success_request');
    Route::post('admin/reject_request', [AdminController::class, 'reject_request'])->name('admin.reject_request');
    Route::post('admin/delete_request', [AdminController::class, 'delete_request'])->name('admin.delete_request');
    

    Route::get('admin/withdraw_list', [AdminController::class, 'withdraw_list'])->name('admin.withdraw_list');
    Route::get('admin/approved_withdraw', [AdminController::class, 'approved_withdraw'])->name('admin.approved_withdraw');
    Route::get('admin/pending_withdraw', [AdminController::class, 'pending_withdraw'])->name('admin.pending_withdraw');
    Route::post('admin/success_withdraw', [AdminController::class, 'success_payment'])->name('admin.success_payment');
    Route::post('admin/reject_withdraw', [AdminController::class, 'reject_payment'])->name('admin.reject_payment');
    Route::post('admin/delete_withdraw', [AdminController::class, 'pending_payment'])->name('admin.pending_payment');
    


    Route::get('admin/payment_list', [AdminController::class, 'payment_list'])->name('admin.payment_list');
    Route::get('admin/approved_payment', [AdminController::class, 'approved_payment'])->name('admin.approved_payment');
    Route::get('admin/pending_payment', [AdminController::class, 'pending_payment'])->name('admin.pending_payment');
    Route::post('admin/success_payment', [AdminController::class, 'success_payment'])->name('admin.success_payment');
    Route::post('admin/reject_payment', [AdminController::class, 'reject_payment'])->name('admin.reject_payment');
    Route::post('admin/delete_payment', [AdminController::class, 'delete_payment'])->name('admin.delete_payment');
    
    
    Route::get('admin/user_list', [AdminController::class, 'user_list'])->name('admin.user_list');
    Route::post('admin/add_user', [AdminController::class, 'add_user'])->name('admin.add_user');
    Route::match(['POST','GET'],'admin/rate_set', [AdminController::class, 'rate_set'])->name('admin.rate_set');
    //Route::post('admin/rate_set', [AdminController::class, 'rate_set'])->name('admin.rate_set');
});

