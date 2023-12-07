<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Factories\CourseFactory;
use App\Edu\Courses\Http\Requests\CreateCourseRequest;
use Illuminate\Http\JsonResponse;

class CreateCourseAction
{
    public function __invoke(
        CreateCourseRequest $createCourseRequest
    ): JsonResponse {
        CourseFactory::create($createCourseRequest->validated());

        return response()->json();
    }
}
