<?php

use App\Edu\Assignments\Http\Actions\CreateAssignmentAction;
use App\Edu\Assignments\Http\Actions\DeleteAssignmentAction;
use App\Edu\Assignments\Http\Actions\ImportAssignmentsAction;
use App\Edu\Assignments\Http\Actions\ViewAssignmentsListAction;
use App\Edu\Assignments\Http\Actions\ViewNotAssignedUsersListAction;
use App\Edu\Courses\Http\Actions\CreateCourseAction;
use App\Edu\Courses\Http\Actions\DeleteCourseAction;
use App\Edu\Courses\Http\Actions\EditCourseAction;
use App\Edu\Courses\Http\Actions\ExportCoursesAction;
use App\Edu\Courses\Http\Actions\ExportCourseStatisticsAction;
use App\Edu\Courses\Http\Actions\ImportCoursesAction;
use App\Edu\Courses\Http\Actions\PlayCourseAction;
use App\Edu\Courses\Http\Actions\ViewCourseAction;
use App\Edu\Courses\Http\Actions\ViewCourseCreateFormAction;
use App\Edu\Courses\Http\Actions\ViewCoursesListAction;
use App\Edu\Courses\Http\Actions\ViewCoursesStatisticsListAction;
use App\Edu\Courses\Http\Actions\ViewUserAssignedCoursesAction;
use App\Edu\Elements\Http\Actions\CreateElementAction;
use App\Edu\Elements\Http\Actions\DeleteElementAction;
use App\Edu\Elements\Http\Actions\EditElementAction;
use App\Edu\Elements\Http\Actions\ViewElementAction;
use App\Edu\Elements\Http\Actions\ViewElementCreateFormAction;
use App\Edu\Elements\Http\ImportCourseElementsAction;
use App\Edu\UserElementStatistic\Http\Actions\CreateUserElementStatistic;
use App\Edu\UserElementStatistic\Http\Actions\ImportUserElementStatisticsAction;
use App\Edu\Users\Http\Actions\CreateUserAction;
use App\Edu\Users\Http\Actions\DeleteUserAction;
use App\Edu\Users\Http\Actions\EditUserAction;
use App\Edu\Users\Http\Actions\ExportUsersAction;
use App\Edu\Users\Http\Actions\ImportUsersAction;
use App\Edu\Users\Http\Actions\ViewUserAction;
use App\Edu\Users\Http\Actions\ViewUserCreateFormAction;
use App\Edu\Users\Http\Actions\ViewUsersListAction;
use App\Edu\Users\Http\Actions\LoginUserAction;
use App\Edu\Users\Http\Actions\RegistrationUserAction;
use App\Http\Actions\LogoutAction;
use App\Http\Actions\ViewLoginFormAction;
use App\Http\Actions\ViewMainPageAction;
use App\Http\Actions\ViewRegistrationFormAction;
use App\Http\Enums\RouteRegularExpressions;
use App\Http\Middleware\UserAuthMiddleware;
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

Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
    Route::get('', ViewLoginFormAction::class)->name('view-form');
    Route::post('', LoginUserAction::class)->name('user');
});

Route::group(['prefix' => 'registration', 'as' => 'registration.'], function () {
    Route::get('', ViewRegistrationFormAction::class)->name('view-form');
    Route::post('', RegistrationUserAction::class)->name('user');
});

Route::middleware([UserAuthMiddleware::class])->group(function () {
    Route::get('/', ViewMainPageAction::class)->name('main');
    Route::get('logout', LogoutAction::class)->name('logout');

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('', ViewUsersListAction::class)->name('list');
        Route::post('', CreateUserAction::class)->name('create');
        Route::get('/create', ViewUserCreateFormAction::class)->name('view-create-form');
        Route::get('/export', ExportUsersAction::class)->name('export');
        Route::post('/import', ImportUsersAction::class)->name('import');

        Route::group(['prefix' => '{userId}', 'as' => 'user.'], function () {
            Route::get('', ViewUserAction::class)->name('view');
            Route::get('/delete', DeleteUserAction::class)->name('delete');
            Route::post('/edit', EditUserAction::class)->name('edit');
        })->where(['userId' => RouteRegularExpressions::MONGO_DB_IDENTIFIER->value]);
    });

    Route::group(['prefix' => 'courses', 'as' => 'courses.'], function () {
        Route::get('', ViewCoursesListAction::class)->name('list');
        Route::get('/assigned', ViewUserAssignedCoursesAction::class)->name('assigned-courses'); //Страница моих курсов
        Route::post('', CreateCourseAction::class)->name('create');
        Route::get('/create', ViewCourseCreateFormAction::class)->name('view-create-form');
        Route::get('/export', ExportCoursesAction::class)->name('export');
        Route::get('/statistics', ViewCoursesStatisticsListAction::class)->name('statistics'); //Страница статистики
        Route::get('/export-statistics', ExportCourseStatisticsAction::class)->name('export-statistics');
        Route::post('/import', ImportCoursesAction::class)->name('import');
        Route::post('/import-statistics', ImportUserElementStatisticsAction::class)->name('import-statistics');


        Route::group(['prefix' => '{courseId}', 'as' => 'course.'], function () {
            Route::get('', ViewCourseAction::class)->name('view');
            Route::get('/play', PlayCourseAction::class)->name('play'); //Страница просмотра курса от лица пользователя
            Route::get('/delete', DeleteCourseAction::class)->name('delete');
            Route::post('/edit', EditCourseAction::class)->name('edit');

            Route::group(['prefix' => 'elements', 'as' => 'elements.'], function () {
                Route::post('', CreateElementAction::class)->name('create');
                Route::get('/create', ViewElementCreateFormAction::class)->name('view-create-form'); //Страница создания элемента
                Route::post('/import', ImportCourseElementsAction::class)->name('import');

                Route::group(['prefix' => '{elementId}', 'as' => 'element.'], function () {
                    Route::get('', ViewElementAction::class)->name('view'); //Страница просмотра (редактирования) элемента
                    Route::post('/edit', EditElementAction::class)->name('edit');
                    Route::get('/delete', DeleteElementAction::class)->name('delete');
                })->where(['elementId' => RouteRegularExpressions::MONGO_DB_IDENTIFIER->value]);
            });

            Route::group(['prefix' => 'assignments', 'as' => 'assignments.'], function () {
                Route::get('', ViewAssignmentsListAction::class)->name('list');
                Route::get('not-assigned', ViewNotAssignedUsersListAction::class)->name('not-assigned');
                Route::get('/create', CreateAssignmentAction::class)->name('create');
                Route::get('/delete', DeleteAssignmentAction::class)->name('delete');
                Route::post('/import', ImportAssignmentsAction::class)->name('import');
            });

            Route::group(['prefix' => 'statistic', 'as' => 'statistic.'], function () {
                Route::get('/create', CreateUserElementStatistic::class)->name('create');
            });
        })->where(['courseId' => RouteRegularExpressions::MONGO_DB_IDENTIFIER->value]);
    });
});
