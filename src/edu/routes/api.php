<?php

use App\Edu\Users\Http\Actions\CreateUserAction;
use App\Edu\Users\Http\Actions\DeleteUserAction;
use App\Edu\Users\Http\Actions\EditUserAction;
use App\Edu\Users\Http\Actions\ViewUserAction;
use App\Edu\Users\Http\Actions\ViewUsersListAction;
use App\Edu\Users\Http\Actions\LoginUserAction;
use App\Edu\Users\Http\Actions\RegistrationUserAction;
use App\Http\Actions\ViewLoginFormAction;
use App\Http\Actions\ViewRegistrationFormAction;
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

Route::prefix('/login')->group(function () {
    Route::get('', ViewLoginFormAction::class);
    Route::post('', LoginUserAction::class);
});

Route::prefix('/registration')->group(function () {
    Route::get('', ViewRegistrationFormAction::class);
    Route::post('', RegistrationUserAction::class);
});

Route::middleware([])->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('', ViewUsersListAction::class);
        Route::post('', CreateUserAction::class);

        Route::prefix('/{userId}')->where(['userId' => '[A-Za-z0-9]+'])->group(function () {
            Route::get('', ViewUserAction::class);
            Route::get('/delete', DeleteUserAction::class);
            Route::post('/edit', EditUserAction::class);
        });
    });
});
