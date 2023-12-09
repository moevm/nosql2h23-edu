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

Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
    Route::get('', ViewLoginFormAction::class)->name('view-form');
    Route::post('', LoginUserAction::class)->name('user');
});

Route::group(['prefix' => 'registration', 'as' => 'registration.'], function () {
    Route::get('', ViewRegistrationFormAction::class)->name('view-form');
    Route::post('', RegistrationUserAction::class)->name('user');
});

Route::middleware([])->group(function () {
    Route::prefix('/users')->name('users')->group(function () {
        Route::get('', ViewUsersListAction::class)->name('view-list');
        Route::post('', CreateUserAction::class)->name('create-user');

        Route::prefix('/{userId}')->name('user')->where(['userId' => '[A-Za-z0-9]+'])->group(function () {
            Route::get('', ViewUserAction::class)->name('view-user');
            Route::get('/delete', DeleteUserAction::class)->name('delete-user');
            Route::post('/edit', EditUserAction::class)->name('edit-user');
        });
    });
});
