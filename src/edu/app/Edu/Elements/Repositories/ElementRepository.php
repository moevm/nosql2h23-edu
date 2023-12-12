<?php

declare(strict_types=1);

namespace App\Edu\Elements\Repositories;

use App\Edu\Elements\Models\Element;
use Illuminate\Database\Eloquent\Builder;

class ElementRepository
{
    public function findOneByCourseId(string $courseId, string $elementId): ?Element
    {
        $element = $this->getElementsQueryBuilder()
            ->where('_id', '=', $elementId)
            ->where('course_id', '=', $courseId);

        if (!$element instanceof Element) {
            return null;
        }

        return $element;
    }

    private function getElementsQueryBuilder(): Builder
    {
        return Element::query();
    }

    public function deleteById(string $elementId): int
    {
        return $this
            ->getElementsQueryBuilder()
            ->where('_id', '=', $elementId)
            ->delete();
    }
}
