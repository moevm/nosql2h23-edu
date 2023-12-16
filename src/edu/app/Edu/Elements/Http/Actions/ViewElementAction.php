<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Actions;

use App\Edu\Elements\Models\Element;
use App\Edu\Elements\Repositories\ElementRepository;
use App\Edu\Roles\Specifications\IsUserHasAdminAccess;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ViewElementAction
{
    public function __invoke(
        string $courseId,
        string $elementId,
        ElementRepository $elementRepository,
        IsUserHasAdminAccess $isUserHasAdminAccess
    ): ViewResponse {
        $element = $elementRepository->findOneByCourseId($courseId, $elementId);
        if (!$element instanceof Element) {
            throw new \DomainException('Provided element was not found');
        }

        return View::make('elements.view', [
            'courseId' => $courseId,
            'element' => $element,
            'isAdmin' => $isUserHasAdminAccess->isSatisfiedBy(Auth::user()),
        ]);
    }
}
