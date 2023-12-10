<?php

declare(strict_types=1);

namespace App\Edu\Courses\Assemblers;

use App\Edu\Courses\DTO\CourseUpdatingDTO;

class CourseUpdatingDTOAssembler
{
    public function assemble(array $attributes): CourseUpdatingDTO
    {
        $courseUpdatingDTO = new CourseUpdatingDTO();

        $title = $attributes['title'] ?? null;
        if ($title) {
            $courseUpdatingDTO->setTitle($title);
        }

        $description = $attributes['description'] ?? null;
        if ($description) {
            $courseUpdatingDTO->setDescription($description);
        }

        return $courseUpdatingDTO;
    }
}
