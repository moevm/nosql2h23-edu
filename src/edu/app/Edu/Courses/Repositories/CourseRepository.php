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
                coursesQueryBuilder: $this->getCoursesQueryBuilder(),
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

    public function findOneById(string $courseId, $withElements = false): ?Course
    {
        $builder = $this->getCoursesQueryBuilder();
        if ($withElements) {
            $builder->with(['elements']);
        }

        $course = $builder->find($courseId);
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
        Builder $coursesQueryBuilder,
        CoursesFilterDTO $coursesFilterDTO
    ): Builder {
        $title = $coursesFilterDTO->getTitle();
        if ($title) {
            $coursesQueryBuilder->where('title', '=', $title);
        }

        $courseIds = $coursesFilterDTO->getCoursesIds();
        if (!empty($courseIds)) {
            $coursesQueryBuilder->whereIn('_id', $courseIds);
        }

        $authorName = $coursesFilterDTO->getAuthorName();
        if ($authorName) {
            $coursesQueryBuilder->whereHas('user', function ($query) use ($authorName) {
                $query->where('surname', '=', $authorName);
            });
        }

        return $coursesQueryBuilder;
    }
}
