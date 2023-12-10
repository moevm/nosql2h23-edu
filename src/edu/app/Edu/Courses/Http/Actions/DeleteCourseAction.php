<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Repositories\CourseRepository;
use Illuminate\Http\RedirectResponse;

class DeleteCourseAction
{
    public function __invoke(
        string $courseId,
        CourseRepository $courseRepository
    ): RedirectResponse {
        $courseRepository->deleteById($courseId);

        return back();
    }
}
