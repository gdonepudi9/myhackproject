<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GigController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\VPNController;

use App\View\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('auth/redirect', [GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/callback', [GoogleController::class, 'handleCallback']);
Route::get("/becomefreelancer", [HomePageController::class, "becomefreelancer"])->name("becomefreelancer");
Route::post('/set-intended-route', [AuthenticatedSessionController::class, 'setIntendedRoute']);

// Additional routes for the cards
Route::get('/real-time-challenges', [HomePageController::class, 'realTimeChallenges'])->name('real-time-challenges');
Route::get('/community-learning', [HomePageController::class, 'communityLearning'])->name('community-learning');
Route::get('/performance-tracking', [HomePageController::class, 'performanceTracking'])->name('performance-tracking');
Route::get('/resources', [HomePageController::class, "resources"])->name("resources");
Route::get('/404', [HomePageController::class, "this"])->name("404");

Route::post('/create-checkout-session', [PaymentController::class, 'createCheckoutSession'])->name('create.checkout.session');
Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');


Route::post('/connect-vpn', [VPNController::class, 'connect']);
Route::post('/tothsmachine', [HomePageController::class, "tothsmachine"])->name("tothsmachine");

Route::get('/spawn-machine', [VPNController::class, 'spawnMachine'])->name('spawn.machine');

Route::post('/check-flag', [VPNController::class, 'checkFlag'])->name('check.flag');




Route::get('/', [HomePageController::class, "index"])->name("home");
Route::get('/dashboard', [HomePageController::class, "dashboard"])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// routes/web.php
Route::post('/profileupdate', [HomePageController::class, 'update'])->name('profileupdate');

Route::get('/phpinfo', function () {
    ob_start(); // Start output buffering
    phpinfo(); // Output phpinfo
    $phpinfo = ob_get_clean(); // Get the output and clean the buffer
    return response($phpinfo)->header('Content-Type', 'text/html'); // Return it as a response
});



require __DIR__.'/auth.php';
