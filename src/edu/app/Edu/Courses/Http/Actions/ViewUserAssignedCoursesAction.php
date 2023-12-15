<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Assignments\Models\Assignment;
use App\Edu\Courses\Assemblers\CoursesFilterDTOAssembler;
use App\Edu\Courses\Http\Requests\ViewCoursesListRequest;
use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\Users\Models\User;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ViewUserAssignedCoursesAction
{
    private const DEFAULT_PAGE = 1;

    private const DEFAULT_PER_PAGE = 5;

    private const DEFAULT_FILTERS = [];

    public function __invoke(
        ViewCoursesListRequest $viewCoursesListRequest,
        CourseRepository $courseRepository,
        CoursesFilterDTOAssembler $coursesFilterDTOAssembler,
    ): ViewResponse {
        /** @var User $currentUser */
        $currentUser = Auth::user();
        if (!$currentUser) {
            throw new \RuntimeException('No auth user');
        }

        $courseIds = [];
        $currentUser->assignments->each(function (Assignment $assignment) use (&$courseIds) {
            $courseIds[] = $assignment->course_id;
        });

        $filterDTO = $coursesFilterDTOAssembler->assemble($viewCoursesListRequest->get('filters', self::DEFAULT_FILTERS));
        $filterDTO->setCoursesIds($courseIds);

        $filteredCoursesPage = $courseRepository->getFilteredCoursesPage(
            page: (int) $viewCoursesListRequest->get('page', self::DEFAULT_PAGE),
            perPage: (int) $viewCoursesListRequest->get('per-page', self::DEFAULT_PER_PAGE),
            coursesFilterDTO: $filterDTO
        );

        return View::make('courses.user-courses', [
            'filteredCoursesPage' => $filteredCoursesPage,
        ]);
    }
}
