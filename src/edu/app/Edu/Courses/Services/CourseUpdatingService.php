<?php

declare(strict_types=1);

namespace App\Edu\Courses\Services;

use App\Edu\Courses\DTO\CourseUpdatingDTO;
use App\Edu\Courses\Models\Course;

class CourseUpdatingService
{
    public function update(Course $course, CourseUpdatingDTO $courseUpdatingDTO): bool
    {
        $title = $courseUpdatingDTO->getTitle();
        if ($title) {
            $course->title = $title;
        }

        $description = $courseUpdatingDTO->getDescription();
        if ($description) {
            $course->description = $description;
        }

        return $course->save();
    }
}
