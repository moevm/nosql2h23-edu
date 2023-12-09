<?php

declare(strict_types=1);

namespace App\Edu\Courses\Factories;

use App\Edu\Courses\Models\Course;
use App\Edu\Users\Models\User;

class CourseFactory
{
    public static function create(array $attributes): Course
    {
        $course = new Course();

        $course->title = $attributes['title'];
        $course->description = $attributes['description'];

        $courseAuthor = $attributes['course_author'];
        if (!$courseAuthor instanceof User) {
            throw new \RuntimeException('Could not create course without author');
        }

        $course->user_id = $courseAuthor->getKey();

        $savingResult = $course->save();
        if (!$savingResult) {
            throw new \RuntimeException('Could not create course');
        }

        return $course;
    }
}
