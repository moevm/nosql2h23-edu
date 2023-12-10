<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Actions;

use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewResponse;

class ViewElementCreateFormAction
{
    public function __invoke(string $courseId): ViewResponse
    {
        return View::make('courses.course.elements.view-create-form');
    }
}
