<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\Users\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;

class DeleteCourseAction
{
    public function __invoke(
        string $courseId,
        CourseRepository $courseRepository
    ): JsonResponse {
        $courseRepository->deleteById($courseId);

        return response()->json();
    }
}
