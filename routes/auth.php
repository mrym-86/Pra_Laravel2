<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\FurnitureController;
use Illuminate\Support\Facades\Route;
/*use App\Http\Controllers\FurnitureController;*/

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    //★POST→GETへ変更するのは問題ない？
    /*Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');*/

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

    // 転記
    Route::get('/furniture',[FurnitureController::class, 'index'])->name('furniture.index');

    Route::get('/furniture/about',[FurnitureController::class, 'about'])->name('furniture.about');

    Route::get('/furniture/company',[FurnitureController::class, 'company'])->name('furniture.company');

    Route::get('/furniture/create',[FurnitureController::class, 'create'])->name('furniture.create');

    Route::post('/furniture/store',[FurnitureController::class, 'store'])->name('furniture.store');

    Route::get('/furniture/edit',[FurnitureController::class, 'edit'])->name('furniture.edit');

    Route::get('/furniture/{id}',[FurnitureController::class,'show'])->name('furniture.show');

    Route::post('/furniture/{id}',[FurnitureController::class,'destroy'])->name('furniture.destroy');
});
