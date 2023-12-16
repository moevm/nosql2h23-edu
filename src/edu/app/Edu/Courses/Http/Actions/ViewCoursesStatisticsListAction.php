<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Http\Requests\ViewCoursesStatisticsListRequest;
use App\Edu\Courses\Services\CoursesPageStatisticsPreparingService;
use App\Edu\Roles\Specifications\IsUserHasAdminAccess;
use App\Edu\UserElementStatistic\DTO\StatisticsFilterDTO;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ViewCoursesStatisticsListAction
{
    private const DEFAULT_PAGE = 1;

    private const DEFAULT_PER_PAGE = 5;

    private const DEFAULT_FILTERS = [];

    public function __invoke(
        ViewCoursesStatisticsListRequest $viewCoursesStatisticsListRequest,
        CoursesPageStatisticsPreparingService $coursesPageStatisticsPreparingService,
        IsUserHasAdminAccess $isUserHasAdminAccess
    ): ViewResponse {
        $page = (int) $viewCoursesStatisticsListRequest->get('page', self::DEFAULT_PAGE);
        $perPage = (int) $viewCoursesStatisticsListRequest->get('per-page', self::DEFAULT_PER_PAGE);
        $filters = $viewCoursesStatisticsListRequest->get('filters', self::DEFAULT_FILTERS);


        $filtersDTO = (new StatisticsFilterDTO())
            ->setPassedCount(isset($filters['passed_count']) ? (int)$filters['passed_count'] : null)
            ->setAssignmentsCount(isset($filters['assignments_count']) ? (int)$filters['assignments_count'] : null);

        $coursesStatisticsPage = $coursesPageStatisticsPreparingService->prepareCoursesPage(
            page: $page,
            perPage: $perPage,
            filtersDTO: $filtersDTO
        );

        return View::make('courses.statistics', [
            'coursesStatisticsPage' => $coursesStatisticsPage,
            'isAdmin' => $isUserHasAdminAccess->isSatisfiedBy(Auth::user()),
        ]);
    }
}
