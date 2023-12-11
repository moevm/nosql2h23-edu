<?php

declare(strict_types=1);

namespace App\Edu\Courses\Services;

use App\Edu\Courses\Models\Course;
use App\Edu\Elements\Assemblers\ElementsFilterDTOAssembler;
use App\Edu\Elements\Services\ElementsFilteringService;
use App\Edu\Elements\Services\ElementsPaginationService;

class CourseViewPreparingService
{
    public function __construct(
        private readonly ElementsFilteringService $elementsFilteringService,
        private readonly ElementsPaginationService $elementsPaginationService,
        private readonly ElementsFilterDTOAssembler $elementsFilterDTOAssembler
    ) {
    }

    public function prepareCourse(
        Course $course,
        int $page,
        int $perPage,
        array $filters,
        array $options = []
    ): Course {
        $elementsFilterDTO = $this->elementsFilterDTOAssembler->assemble($filters);

        $filteredElements = $this->elementsFilteringService->filter(
            elements: $course->elements,
            elementsFilterDTO: $elementsFilterDTO
        );

        $paginatedElements = $this->elementsPaginationService->paginate(
            elements: $filteredElements,
            perPage: $perPage,
            page: $page,
            options: $options
        );

        $course->setRelation('elements', $paginatedElements);

        return $course;
    }
}
