<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\RideController;
use App\Models\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;


//USER MANAGEMENT
Route::prefix('/user')->group(function() {
    Route::post('/login', [AuthController::class, 'loginAccount']);
    Route::post('/loginMob', [AuthController::class, 'loginAccountMobile']);
    Route::post('/signup', [AuthController::class, 'createAccount']);
    Route::post('/confirm', [AuthController::class, 'text']);


    
    Route::post('/send-otp', [AuthController::class, 'sendOtp']);

    // Route to verify OTP
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);


    Route::patch('/me', [AuthController::class, 'accountUpdate'])->middleware(['auth:sanctum']);
    Route::post('/logout', [AuthController::class, 'logoutAccount'])->middleware(['auth:sanctum']);

    Route::get('/rider', [AuthController::class, 'showRider']);
    
    Route::get('/customer', [AuthController::class, 'showCustomer']);
    Route::get('/dashboard/counts', [DashboardController::class, 'getCounts']);
    Route::get('/riders', [RiderController::class, 'getRiders']);
    Route::get('/riders_req', [RiderController::class, 'getRidersRequirements']);

    Route::post('/upload', [RiderController::class, 'upload'])->middleware('auth:sanctum');
    Route::post('/update-rider-info', [RiderController::class, 'updateRiderInfo'])->middleware('auth:sanctum');
    Route::get('/requirement_photos/{rider_id}', [RiderController::class, 'getUploadedImages']);

    Route::put('rider/{user_id}/status', [CustomerController::class, 'updateStatus']);
    Route::get('/available-rides', [RiderController::class, 'getAvailableRides']);
    Route::put('/accept_ride/{ride_id}', [RiderController::class, 'accept_ride']);
    Route::get('check-active-ride/{user_id}', [RiderController::class, 'checkActiveRide']);
    Route::put('/start_ride/{ride_id}', [RiderController::class, 'start_ride']);
    Route::put('/finish_ride/{ride_id}', [RiderController::class, 'finish_ride']);

    Route::get('/customers', [CustomerController::class, 'getCustomers']);
    Route::put('customer/{user_id}/status', [CustomerController::class, 'updateStatus']);
    Route::post('/book', [CustomerController::class, 'book']);
    Route::get('check-existing-booking/{user_id}', [CustomerController::class, 'checkActiveRide']);
    Route::get('latest-available/{user_id}', [CustomerController::class, 'getLatestAvailableRide']);
    Route::get('latest-available2/{user_id}', [CustomerController::class, 'getLatestAvailableRide2']);
    Route::put('cancel_ride/{ride_id}', [CustomerController::class, 'cancelRide']);
    Route::put('/complete_ride/{ride_id}', [CustomerController::class, 'finish_ride']);

    Route::get('/admin', [AdminController::class, 'getAdmin']);
    Route::get('/admin/{id}', [AdminController::class, 'show']);
    Route::put('admin/{user_id}/status', [AdminController::class, 'updateStatus']);
    Route::put('/update_admin/{id}', [AdminController::class, 'updateAdmin']);
    Route::put('/verify_rider/{user_id}', [AdminController::class, 'verify_rider']);
    
    Route::get('/history', [HistoryController::class, 'index']);
    Route::get('/cus_history/{user_id}', [HistoryController::class, 'customerHistory']);
    Route::get('/rider_history/{user_id}', [HistoryController::class, 'riderHistory']);
    Route::get('/feedbacks', [FeedbackController::class, 'index']);

    Route::post('/book-location', [RideController::class, 'saveBookLocation']);
    Route::post('/rider-location', [RideController::class, 'setRiderLocation']);

    
});

