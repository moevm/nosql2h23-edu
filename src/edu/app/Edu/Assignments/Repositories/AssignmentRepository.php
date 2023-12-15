<?php

declare(strict_types=1);

namespace App\Edu\Assignments\Repositories;

use App\Edu\Assignments\Models\Assignment;
use Illuminate\Database\Eloquent\Builder;

class AssignmentRepository
{
    private function getAssignmentsQueryBuilder(): Builder
    {
        return Assignment::query();
    }

    public function deleteCourseAssignmentByUserId(string $courseId, string $userId): int
    {
        return $this
            ->getAssignmentsQueryBuilder()
            ->where('course_id','=', $courseId)
            ->where('user_id', '=', $userId)
            ->delete();
    }
}
