<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Factories\CourseFactory;
use App\Edu\Courses\Http\Requests\CreateCourseRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class CreateCourseAction
{
    public function __invoke(
        CreateCourseRequest $createCourseRequest
    ): JsonResponse {
        $courseAttributes = $createCourseRequest->validated();
        $courseAttributes['course_author'] = Auth::user();

        CourseFactory::create($courseAttributes);

        return response()->json();
    }
}
