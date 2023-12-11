<?php

declare(strict_types=1);

namespace App\Edu\Assignments\Http\Actions;

use App\Edu\Assignments\Factories\AssignmentFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CreateAssignmentAction
{
    public function __invoke(
        string $courseId,
        Request $request
    ): RedirectResponse {
        $userId = $request->input('user_id', '');

        AssignmentFactory::create([
            'course_id' => $courseId,
            'user_id' => $userId,
        ]);

        return back();
    }
}
