<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Roles\Specifications\IsUserHasAdminAccess;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewResponse;

class ViewCourseCreateFormAction
{
    public function __invoke(IsUserHasAdminAccess $isUserHasAdminAccess): ViewResponse
    {
        return View::make('courses.view-create-form', [
            'isAdmin' => $isUserHasAdminAccess->isSatisfiedBy(Auth::user()),
        ]);
    }
}
