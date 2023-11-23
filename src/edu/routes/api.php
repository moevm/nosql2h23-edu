<?php

use App\Edu\Users\Http\Actions\CreateUserAction;
use App\Edu\Users\Http\Actions\GetUsersListAction;
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

Route::middleware([])->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('', GetUsersListAction::class);
        Route::post('', CreateUserAction::class);
    });
});
