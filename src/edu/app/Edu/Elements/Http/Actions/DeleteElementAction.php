<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Actions;

use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\Elements\Repositories\ElementRepository;
use Illuminate\Http\RedirectResponse;

class DeleteElementAction
{
    public function __invoke(
        string $elementId,
        ElementRepository $elementRepository
    ): RedirectResponse {
        $elementRepository->deleteById($elementId);

        return back();
    }
}
