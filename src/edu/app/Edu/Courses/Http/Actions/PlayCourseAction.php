<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Repositories\CourseRepository;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\View;

class PlayCourseAction
{
    public function __invoke(
        string $courseId,
        CourseRepository $courseRepository
    ): ViewResponse {
        $course = $courseRepository->findOneById($courseId, true);
        if (!$course) {
            throw new \RuntimeException('Course was not found');
        }

        return View::make('courses.play', [
            'course' => $course,
        ]);
    }
}
