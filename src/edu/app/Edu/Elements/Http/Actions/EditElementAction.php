<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Actions;

use App\Edu\Elements\Assemblers\ElementUpdatingDTOAssembler;
use App\Edu\Elements\Http\Requests\EditElementRequest;
use App\Edu\Elements\Models\Element;
use App\Edu\Elements\Repositories\ElementRepository;
use App\Edu\Elements\Services\ElementUpdatingService;
use Illuminate\Http\RedirectResponse;

class EditElementAction
{
    public function __invoke(
        string $courseId,
        string $elementId,
        EditElementRequest $editElementRequest,
        ElementRepository $elementRepository,
        ElementUpdatingDTOAssembler $elementUpdatingDTOAssembler,
        ElementUpdatingService $elementUpdatingService
    ): RedirectResponse {
        $element = $elementRepository->findOneByCourseId($courseId, $elementId);
        if (!$element instanceof Element) {
            throw new \DomainException('Element to update was not found');
        }

        $elementUpdatingDTO = $elementUpdatingDTOAssembler->assemble($editElementRequest->validated());

        $elementUpdatingService->update($element, $elementUpdatingDTO);

        return redirect()->route(
            'courses.course.elements.element.view',
            [
                'courseId' => $courseId,
                'elementId' => $elementId,
            ]
        );
    }
}
