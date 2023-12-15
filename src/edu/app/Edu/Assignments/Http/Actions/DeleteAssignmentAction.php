<?php

declare(strict_types=1);

namespace App\Edu\Assignments\Http\Actions;

use App\Edu\Assignments\Repositories\AssignmentRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DeleteAssignmentAction
{
    public function __invoke(
        string $courseId,
        Request $request,
        AssignmentRepository $assignmentRepository
    ): RedirectResponse {
        $userId = $request->input('user_id', '');
        $assignmentRepository->deleteCourseAssignmentByUserId($courseId, $userId);

        return back();
    }
}
