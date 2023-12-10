<?php

declare(strict_types=1);

namespace App\Edu\Courses\Assemblers;

use App\Edu\Courses\DTO\CourseUpdatingDTO;

class CourseUpdatingDTOAssembler
{
    public function assemble(array $attributes): CourseUpdatingDTO
    {
        return (new CourseUpdatingDTO())
            ->setTitle($attributes['title'] ?? null)
            ->setDescription($attributes['description'] ?? null);
    }
}
