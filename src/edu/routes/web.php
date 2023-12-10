<?php

use App\Edu\Courses\Http\Actions\CreateCourseAction;
use App\Edu\Courses\Http\Actions\DeleteCourseAction;
use App\Edu\Courses\Http\Actions\EditCourseAction;
use App\Edu\Courses\Http\Actions\ViewCourseAction;
use App\Edu\Courses\Http\Actions\ViewCoursesListAction;
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
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('', ViewUsersListAction::class)->name('list');
        Route::post('', CreateUserAction::class)->name('create');

        Route::group(['prefix' => '{userId}', 'as' => 'user.'], function () {
            Route::get('', ViewUserAction::class)->name('view');
            Route::get('/delete', DeleteUserAction::class)->name('delete');
            Route::post('/edit', EditUserAction::class)->name('edit');
        })->where(['userId' => '[A-Za-z0-9]+']);
    });

    Route::group(['prefix' => 'courses', 'as' => 'courses.'], function () {
        Route::get('', ViewCoursesListAction::class)->name('list');
        Route::post('', CreateCourseAction::class)->name('create');

        Route::group(['prefix' => '{courseId}', 'as' => 'course.'], function () {
            Route::get('', ViewCourseAction::class)->name('view');
            Route::get('/delete', DeleteCourseAction::class)->name('delete');
            Route::post('/edit', EditCourseAction::class)->name('edit');

            Route::group(['prefix' => 'elements', 'as' => 'elements.'], function () {
                Route::post('', '')->name('create');
                Route::get('/create', '')->name('view-create-form');

                Route::group(['prefix' => '{elementId}', 'as' => 'element.'], function () {
                    Route::get('', '')->name('view');
                    Route::post('/edit', '')->name('edit');
                    Route::get('/delete', '')->name('delete');
                })->where(['elementId' => '[A-Za-z0-9]+']);
            });
        })->where(['courseId' => '[A-Za-z0-9]+']);
    });
});
