<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\Users\Repositories\UserRepository;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\View;

class ViewCourseAction
{
    public function __invoke(
        string $courseId,
        CourseRepository $courseRepository
    ): ViewResponse {
        $course = $courseRepository->findOneById($courseId);

        return View::make('courses.view', [
            'course' => $course,
        ]);
    }
}