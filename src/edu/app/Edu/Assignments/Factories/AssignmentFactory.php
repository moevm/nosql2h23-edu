<?php

declare(strict_types=1);

namespace App\Edu\Assignments\Factories;

use App\Edu\Assignments\Models\Assignment;
use App\Edu\Courses\Models\Course;
use App\Edu\Users\Models\User;

class AssignmentFactory
{
    public static function create(array $attributes): Assignment
    {
        $assignment = new Assignment();

        $user = User::query()
            ->where('_id', '=', $attributes['user_id'])
            ->first();

        $course = Course::query()
            ->where('_id', '=', $attributes['course_id'])
            ->first();

        if (!$user || !$course) {
            throw new \RuntimeException('Could not create assignment without user or course');
        }

        $assignment->user_id = $user->getKey();
        $assignment->course_id = $course->getKey();

        $savingResult = $assignment->save();
        if (!$savingResult) {
            throw new \RuntimeException('Could not create assignment');
        }

        return $assignment;
    }
}
