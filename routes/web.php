<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ExploreController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/create-post', [PostController::class, 'createPost'])->name('create.post');
    Route::post('/send-post', [PostController::class, 'sendPost'])->name('send.post');
    Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('edit.post');
    Route::delete('/delete-post/{id}', [PostController::class, 'deletePost'])->name('delete.post');
    Route::put('/update-post/{id}', [PostController::class, 'updatePost'])->name('update.post');
    Route::get('/single-post/{id}', [PostController::class, 'singlePost'])->name('single.post');
});

Route::middleware('auth')->group(function () {
    Route::post('/comment/{id}', [CommentController::class, 'comment'])->name('comment');
    Route::get('/email/verify/{id}', [AuthController::class, 'verify'])->name('verification.verify');
    Route::get('/email/resend', [AuthController::class, 'resend'])->name('verification.resend');
    Route::get('/verify-email-page', [AuthController::class, 'verifyEmailPage'])->name('verify.email.page');
    Route::get('/email-register', [AuthController::class, 'emailRegister'])->name('email-register');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
    Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register.user')->middleware('guest');
    Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login.user');
    Route::get('/forgot-password-email', [AuthController::class, 'forgotPasswordEmail'])->name('forgot.password.email')->middleware('guest');
    Route::post('/password-email', [AuthController::class, 'passwordEmail'])->name('password.email')->middleware('guest');
    Route::get('/password-reset', [AuthController::class, 'passwordReset'])->name('password.reset')->middleware('guest');
    Route::post('/password-update', [AuthController::class, 'passwordUpdate'])->name('password.update')->middleware('guest');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('auth');
Route::get('/', [ExploreController::class, 'explore'])->name('explore');

