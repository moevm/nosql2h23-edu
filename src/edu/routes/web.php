<?php

use App\Edu\Users\Http\Actions\CreateUserAction;
use App\Edu\Users\Http\Actions\GetUsersListAction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([])->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('', GetUsersListAction::class);
        Route::post('', CreateUserAction::class);
    });
});
