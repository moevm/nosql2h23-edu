<?php

declare(strict_types=1);

namespace App\Edu\Courses\Factories;

use App\Edu\Courses\Models\Course;

class CourseFactory
{
    public static function create(array $attributes): Course
    {
        $course = new Course();

        $course->title = $attributes['title'];
        $course->description = $attributes['description'];

        $savingResult = $course->save();
        if (!$savingResult) {
            throw new \RuntimeException('Could not create course');
        }

        return $course;
    }
}
