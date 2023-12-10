<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Assemblers\CourseUpdatingDTOAssembler;
use App\Edu\Courses\Http\Requests\EditCourseRequest;
use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\Courses\Services\CourseUpdatingService;
use Illuminate\Http\RedirectResponse;

class EditCourseAction
{
    public function __invoke(
        string $courseId,
        EditCourseRequest $editCourseRequest,
        CourseRepository $courseRepository,
        CourseUpdatingDTOAssembler $courseUpdatingDTOAssembler,
        CourseUpdatingService $courseUpdatingService
    ): RedirectResponse {
        $course = $courseRepository->findOneById($courseId);
        if (!$course) {
            throw new \DomainException('Course to update was not found');
        }

        $courseUpdatingDTO = $courseUpdatingDTOAssembler->assemble($editCourseRequest->validated());

        $courseUpdatingService->update($course, $courseUpdatingDTO);

        return redirect()->route('courses.view', ['courseId' => $courseId]);
    }
}
