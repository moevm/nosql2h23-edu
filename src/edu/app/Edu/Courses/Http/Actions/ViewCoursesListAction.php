<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Assemblers\CoursesFilterDTOAssembler;
use App\Edu\Courses\Http\Requests\ViewCoursesListRequest;
use App\Edu\Courses\Repositories\CourseRepository;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\View;

class ViewCoursesListAction
{
    private const DEFAULT_PAGE = 1;

    private const DEFAULT_PER_PAGE = 25;

    private const DEFAULT_FILTERS = [];

    public function __invoke(
        ViewCoursesListRequest $viewCoursesListRequest,
        CourseRepository $courseRepository,
        CoursesFilterDTOAssembler $coursesFilterDTOAssembler,
    ): ViewResponse {
        $filteredCoursesPage = $courseRepository->getFilteredCoursesPage(
            page: (int) $viewCoursesListRequest->get('page', self::DEFAULT_PAGE),
            perPage: (int) $viewCoursesListRequest->get('per-page', self::DEFAULT_PER_PAGE),
            coursesFilterDTO: $coursesFilterDTOAssembler->assemble(
                filters: $viewCoursesListRequest->get('filters', self::DEFAULT_FILTERS)
            )
        );

        return View::make('courses.list', [
            'filteredCoursesPage' => $filteredCoursesPage,
        ]);
    }
}
