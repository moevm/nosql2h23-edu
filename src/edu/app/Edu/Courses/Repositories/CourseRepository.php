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
                usersQueryBuilder: $this->getCoursesQueryBuilder(),
                coursesFilterDTO: $coursesFilterDTO
            )
            ->paginate(
                perPage: $perPage,
                page: $page
            );
    }

    private function getCoursesQueryBuilder(): Builder
    {
        return Course::query();
    }

    public function findOneById(string $courseId): ?Course
    {
        $course = $this->getCoursesQueryBuilder()->find($courseId);
        if (!$course instanceof Course) {
            return null;
        }

        return $course;
    }

    public function deleteById(string $courseId): int
    {
        return $this
            ->getCoursesQueryBuilder()
            ->where('_id', '=', $courseId)
            ->delete();
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