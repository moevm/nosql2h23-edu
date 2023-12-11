<?php

declare(strict_types=1);

namespace App\Edu\Courses\Assemblers;

use App\Edu\Courses\DTO\CoursesFilterDTO;

class CoursesFilterDTOAssembler
{
    public function assemble(array $filters): CoursesFilterDTO
    {
        return (new CoursesFilterDTO())
            ->setTitle($filters['title'] ?? null)
            ->setAuthorName($filters['author_name'] ?? null);
    }
}
