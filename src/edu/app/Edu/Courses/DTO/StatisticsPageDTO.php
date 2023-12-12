<?php

declare(strict_types=1);

namespace App\Edu\Courses\DTO;

use App\Edu\Courses\Models\Course;

class StatisticsPageDTO
{
    public function __construct(
        private readonly Course $course,
        private readonly int $assignmentsCount,
        private readonly int $passedCount
    ) {
    }

    public function getCourse(): Course
    {
        return $this->course;
    }

    public function getAssignmentsCount(): int
    {
        return $this->assignmentsCount;
    }

    public function getPassedCount(): int
    {
        return $this->passedCount;
    }
}
