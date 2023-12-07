<?php

declare(strict_types=1);

namespace App\Edu\Courses\Repositories;

use App\Edu\Courses\DTO\CoursesFilterDTO;
use App\Edu\Courses\Models\Course;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class CourseRepository
{
    public function getFilteredCoursesPage(
        int $page,
        int $perPage,
        CoursesFilterDTO $coursesFilterDTO
    ): LengthAwarePaginator {
        return $this
            ->applyFilters(
                usersQueryBuilder: $this->getUsersQueryBuilder(),
                coursesFilterDTO: $coursesFilterDTO
            )
            ->paginate(
                perPage: $perPage,
                page: $page
            );
    }

    private function getUsersQueryBuilder(): Builder
    {
        return Course::query();
    }

    private function applyFilters(
        Builder $usersQueryBuilder,
        CoursesFilterDTO $coursesFilterDTO
    ): Builder {
        $title = $coursesFilterDTO->getTitle();
        if ($title) {
            $usersQueryBuilder->where('title', '=', $title);
        }

        return $usersQueryBuilder;
    }
}
