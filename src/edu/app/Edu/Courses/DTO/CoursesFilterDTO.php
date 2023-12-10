<?php

declare(strict_types=1);

namespace App\Edu\Courses\DTO;

class CoursesFilterDTO
{
    private ?string $title = null;

    private ?string $authorName = null;

    public function __construct()
    {
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setAuthorName(string $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }
}
