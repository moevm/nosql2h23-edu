<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Factories\CourseFactory;
use App\Edu\Courses\Http\Requests\CreateCourseRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class CreateCourseAction
{
    public function __invoke(
        CreateCourseRequest $createCourseRequest
    ): RedirectResponse {
        $courseAttributes = $createCourseRequest->validated();
        $courseAttributes['course_author'] = Auth::user();

        CourseFactory::create($courseAttributes);

        return redirect()->route('courses.list');
    }
}
