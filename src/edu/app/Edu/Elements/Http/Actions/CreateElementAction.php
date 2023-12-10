<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Actions;

use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\Elements\Factories\ElementFactory;
use App\Edu\Elements\Http\Requests\CreateElementRequest;
use Illuminate\Http\RedirectResponse;

class CreateElementAction
{
    public function __invoke(
        string $courseId,
        CreateElementRequest $createElementRequest,
        CourseRepository $courseRepository
    ): RedirectResponse {
        $courseElementAttributes = $createElementRequest->validated();
        $courseElementAttributes['course'] = $courseRepository->findOneById($courseId);

        ElementFactory::create($courseElementAttributes);

        return redirect()->route('courses.course.view', ['courseId' => $courseId]);
    }
}
