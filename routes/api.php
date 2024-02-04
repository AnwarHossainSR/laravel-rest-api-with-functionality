<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::post('register', [\App\Http\Controllers\Api\Auth\RegisterController::class, 'register']);
    Route::post('forgot-password', [\App\Http\Controllers\Api\Auth\ForgotPasswordController::class, 'forgotPassword'])->name('password.forgot');
    Route::post('reset-password', [\App\Http\Controllers\Api\Auth\ResetPasswordController::class, 'resetPassword'])->name('password.reset');
    Route::post('login', [\App\Http\Controllers\Api\Auth\LoginController::class, 'login']);

    Route::get('/notifications/email', [\App\Http\Controllers\Api\Notifications\EmailNotificationController::class, 'notify']);

    Route::resource('categories', \App\Http\Controllers\Api\Blogs\CategoryController::class);
    Route::get('categories/{category:slug}', [\App\Http\Controllers\Api\Blogs\CategoryController::class, 'show']);
    Route::resource('posts', \App\Http\Controllers\Api\Blogs\PostController::class);
    Route::get('posts/{post:slug}', [\App\Http\Controllers\Api\Blogs\PostController::class, 'show']);

    Route::middleware(['auth:api', \App\Http\Middleware\AuthGates::class])->group(function () {
        Route::post('update-profile', [\App\Http\Controllers\Api\Profile\ProfileController::class, 'update']);
        Route::post('change-password', [\App\Http\Controllers\Api\Profile\ChangePasswordController::class, 'update']);
        Route::post('logout', [\App\Http\Controllers\Api\Auth\LoginController::class, 'logout']);
        Route::get('samples/list', [\App\Http\Controllers\Api\Samples\SampleController::class, 'list']);
        Route::get('samples/show-common-arr/{sample}', [\App\Http\Controllers\Api\Samples\SampleController::class, 'showCommon']);
        Route::resource('samples', \App\Http\Controllers\Api\Samples\SampleController::class);
        Route::resource('roles', \App\Http\Controllers\Api\PermissionsAndRoles\RoleController::class);
        Route::resource('permissions', \App\Http\Controllers\Api\PermissionsAndRoles\PermissionController::class);
        Route::get('users/list', [\App\Http\Controllers\Api\Users\UserController::class, 'list']);
        Route::resource('users', \App\Http\Controllers\Api\Users\UserController::class);
        Route::post('posts/{post:slug}/comments', [\App\Http\Controllers\Api\Blogs\CommentController::class, 'store']);
        Route::post('posts/{post:slug}/comments/reply', [\App\Http\Controllers\Api\Blogs\CommentController::class, 'storeReply']);

        Route::get('whoami', [\App\Http\Controllers\Api\Users\UserController::class, 'whoami']);
    });
});
