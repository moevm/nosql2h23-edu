<?php

declare(strict_types=1);

namespace App\Edu\Courses\Assemblers;

use App\Edu\Courses\DTO\CoursesFilterDTO;

class CoursesFilterDTOAssembler
{
    public function assemble(array $filters): CoursesFilterDTO
    {
        $coursesFilterDTO = new CoursesFilterDTO();

        $title = $filters['title'] ?? null;
        if ($title) {
            $coursesFilterDTO->setTitle($title);
        }

        $authorName = $filters['author_name'] ?? null;
        if ($authorName) {
            $coursesFilterDTO->setAuthorName($authorName);
        }

        return $coursesFilterDTO;
    }
}
