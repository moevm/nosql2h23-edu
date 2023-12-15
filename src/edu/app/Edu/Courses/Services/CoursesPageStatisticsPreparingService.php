<?php

declare(strict_types=1);

namespace App\Edu\Courses\Services;

use App\Edu\Courses\DTO\CoursesFilterDTO;
use App\Edu\Courses\DTO\StatisticsPageDTO;
use App\Edu\Courses\Models\Course;
use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\UserElementStatistic\DTO\StatisticsFilterDTO;
use App\Edu\UserElementStatistic\Repositories\UserElementStatisticRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CoursesPageStatisticsPreparingService
{
    public function __construct(
        private readonly CourseRepository $courseRepository,
        private readonly UserElementStatisticRepository $userElementStatisticRepository
    ) {
    }

    public function prepareCoursesPage(
        int $page,
        int $perPage,
        StatisticsFilterDTO $filtersDTO
    ): LengthAwarePaginator {
        $courses = $this->courseRepository->getFilteredCoursesPage($page, $perPage, new CoursesFilterDTO());

        $statsPageDTOs = new Collection();

        /** @var Course $course */
        foreach ($courses as $course) {
            $courseAssignments = $course->assignments;
            $courseAssignmentsCount = $courseAssignments->count();
            $passedCount = 0;
            $courseElementIds = [];

            foreach ($course->elements as $element) {
                $courseElementIds[] = $element->getKey();
            }


            foreach ($courseAssignments as $assignment) {
                $statsCount = $this->userElementStatisticRepository->getElementsStatsCountForUser(
                    elementIds: $courseElementIds,
                    userId: $assignment->user_id
                );

                if ($statsCount >= count($courseElementIds)) {
                    $passedCount += 1;
                }
            }

            $statsPageDTOs->add(new StatisticsPageDTO($course, $courseAssignmentsCount, $passedCount));
        }

        $statsPageDTOs = $this->filterStatsPageDTOs($statsPageDTOs, $filtersDTO);

        return new LengthAwarePaginator(
            items: $statsPageDTOs->forPage($page, $perPage),
            total: $statsPageDTOs->count(),
            perPage: $perPage,
            currentPage: $page,
            options: []
        );
    }

    public function filterStatsPageDTOs(
        Collection $statsPageDTOs,
        StatisticsFilterDTO $filtersDTO
    ): Collection {
        $isNeedToFilterByAssignmentsCount = (bool)$filtersDTO->getAssignmentsCount();
        $isNeedToFilterByPassedCount = (bool)$filtersDTO->getPassedCount();

        return $statsPageDTOs->filter(function (StatisticsPageDTO $stats) use ($filtersDTO, $isNeedToFilterByAssignmentsCount, $isNeedToFilterByPassedCount) {
            $result = true;

            if (isNeedToUseAllFilteringCriteria($isNeedToFilterByAssignmentsCount, $isNeedToFilterByPassedCount)) {
                return $stats->getAssignmentsCount() >=$filtersDTO->getAssignmentsCount()
                    && $stats->getPassedCount() >=$filtersDTO->getPassedCount();
            }

            if ($isNeedToFilterByAssignmentsCount) {
                $result = $stats->getAssignmentsCount() >= $filtersDTO->getAssignmentsCount();
            }

            if ($isNeedToFilterByPassedCount) {
                $result = $stats->getPassedCount() >= $filtersDTO->getPassedCount();
            }

            return $result;
        });
    }
}
