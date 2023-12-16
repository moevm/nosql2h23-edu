<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Actions;

use App\Edu\Courses\Models\Course;
use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\Roles\Specifications\IsUserHasAdminAccess;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewResponse;

class ViewElementCreateFormAction
{
    public function __invoke(string $courseId, CourseRepository $courseRepository, IsUserHasAdminAccess $isUserHasAdminAccess): ViewResponse
    {
        $course = $courseRepository->findOneById($courseId);
        if (!$course instanceof Course) {
            throw new \RuntimeException('Provided course does not exist');
        }

        return View::make('elements.view-create-form', ['courseId' => $courseId, 'isAdmin' => $isUserHasAdminAccess->isSatisfiedBy(Auth::user())]);
    }
}
