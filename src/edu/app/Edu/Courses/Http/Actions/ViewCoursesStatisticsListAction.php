<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Http\Requests\ViewCoursesStatisticsListRequest;
use App\Edu\Courses\Services\CoursesPageStatisticsPreparingService;
use App\Edu\UserElementStatistic\DTO\StatisticsFilterDTO;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\View;

class ViewCoursesStatisticsListAction
{
    private const DEFAULT_PAGE = 1;

    private const DEFAULT_PER_PAGE = 25;

    private const DEFAULT_FILTERS = [];

    public function __invoke(
        ViewCoursesStatisticsListRequest $viewCoursesStatisticsListRequest,
        CoursesPageStatisticsPreparingService $coursesPageStatisticsPreparingService
    ): ViewResponse {
        $page = (int) $viewCoursesStatisticsListRequest->get('page', self::DEFAULT_PAGE);
        $perPage = (int) $viewCoursesStatisticsListRequest->get('per-page', self::DEFAULT_PER_PAGE);
        $filters = $viewCoursesStatisticsListRequest->get('filters', self::DEFAULT_FILTERS);

        $filtersDTO = (new StatisticsFilterDTO())
            ->setPassedCount($filters['passed_count'] ?? null)
            ->setAssignmentsCount($filters['assignments_count'] ?? null);

        $coursesStatisticsPage = $coursesPageStatisticsPreparingService->prepareCoursesPage(
            page: $page,
            perPage: $perPage,
            filtersDTO: $filtersDTO
        );

        return View::make('courses.list', [
            'coursesStatisticsPage' => $coursesStatisticsPage,
        ]);
    }
}
