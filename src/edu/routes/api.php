<?php

use App\Edu\Users\Http\Actions\CreateUserAction;
use App\Edu\Users\Http\Actions\DeleteUserAction;
use App\Edu\Users\Http\Actions\EditUserAction;
use App\Edu\Users\Http\Actions\GetUserAction;
use App\Edu\Users\Http\Actions\GetUsersListAction;
use App\Edu\Users\Http\Actions\LoginUserAction;
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

Route::prefix('')->group(function () {
    Route::post('/login', LoginUserAction::class);
});

Route::middleware([])->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('', GetUsersListAction::class);
        Route::post('', CreateUserAction::class);

        Route::prefix('/{userId}')->where(['userId' => '[A-Za-z0-9]+'])->group(function () {
            Route::get('', GetUserAction::class);
            Route::get('/delete', DeleteUserAction::class);
            Route::post('/edit', EditUserAction::class);
        });
    });
});
