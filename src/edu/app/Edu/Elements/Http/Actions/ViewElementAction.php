<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Actions;

use App\Edu\Elements\Models\Element;
use App\Edu\Elements\Repositories\ElementRepository;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\View;

class ViewElementAction
{
    public function __invoke(
        string $courseId,
        string $elementId,
        ElementRepository $elementRepository
    ): ViewResponse {
        $element = $elementRepository->findOneByCourseId($courseId, $elementId);
        if (!$element instanceof Element) {
            throw new \DomainException('Provided element was not found');
        }

        return View::make('elements.view', [
            'element' => $element,
        ]);
    }
}
