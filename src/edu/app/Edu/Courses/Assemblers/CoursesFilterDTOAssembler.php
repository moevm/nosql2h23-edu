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
            ->setAuthorName($filters['author_name'] ?? null)
            ->setDescription($filters['description'] ?? null)
            ->setCourseId($filters['course_id'] ?? null)
            ->setCreatedFrom(isset($filters['created_from']) ? new \DateTime($filters['created_from']) : null)
            ->setCreatedTo(isset($filters['created_to']) ? (new \DateTime($filters['created_to']))->modify('+ 1 day - 1 second') : null);
    }
}
