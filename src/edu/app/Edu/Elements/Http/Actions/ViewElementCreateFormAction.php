<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Actions;

use App\Edu\Courses\Models\Course;
use App\Edu\Courses\Repositories\CourseRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewResponse;

class ViewElementCreateFormAction
{
    public function __invoke(string $courseId, CourseRepository $courseRepository): ViewResponse
    {
        $course = $courseRepository->findOneById($courseId);
        if (!$course instanceof Course) {
            throw new \RuntimeException('Provided course does not exist');
        }

        return View::make('elements.view-create-form', ['courseId' => $courseId]);
    }
}
