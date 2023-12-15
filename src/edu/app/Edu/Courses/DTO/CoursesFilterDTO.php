<?php

declare(strict_types=1);

namespace App\Edu\Courses\DTO;

class CoursesFilterDTO
{
    private ?string $title = null;

    private ?string $authorName = null;

    private array $coursesIds = [];

    public function getCoursesIds(): array
    {
        return $this->coursesIds;
    }

    public function setCoursesIds(array $coursesIds): self
    {
        $this->coursesIds = $coursesIds;

        return $this;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }
}
