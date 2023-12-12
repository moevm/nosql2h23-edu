<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewResponse;

class ViewCourseCreateFormAction
{
    public function __invoke(): ViewResponse
    {
        return View::make('courses.view-create-form');
    }
}
