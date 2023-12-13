<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Http\Requests\ViewCourseRequest;
use App\Edu\Courses\Models\Course;
use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\Courses\Services\CourseViewPreparingService;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\View;

class ViewCourseAction
{
    private const DEFAULT_PAGE = 1;

    private const DEFAULT_PER_PAGE = 5;

    private const DEFAULT_FILTERS = [];

    public function __invoke(
        string $courseId,
        ViewCourseRequest $viewCourseRequest,
        CourseRepository $courseRepository,
        CourseViewPreparingService $courseViewPreparingService
    ): ViewResponse {
        $course = $courseRepository->findOneById($courseId);
        if (!$course instanceof Course) {
            throw new \RuntimeException('Provided course does not exist');
        }

        $page = $viewCourseRequest->validated()['page'] ?? self::DEFAULT_PAGE;
        $perPage = $viewCourseRequest->validated()['per-page'] ?? self::DEFAULT_PER_PAGE;

        $course = $courseViewPreparingService->prepareCourse(
            course: $course,
            page: (int) $page,
            perPage: (int) $perPage,
            filters: $viewCourseRequest->validated()['filters'] ?? self::DEFAULT_FILTERS,
            options: ['path' => $courseId]
        );

        return View::make('courses.view', [
            'course' => $course,
        ]);
    }
}
