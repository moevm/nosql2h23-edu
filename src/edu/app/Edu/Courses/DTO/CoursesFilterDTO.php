<?php

declare(strict_types=1);

namespace App\Edu\Courses\DTO;

class CoursesFilterDTO
{
    private ?string $title = null;

    private ?string $authorName = null;

    private ?string $description = null;

    private ?string $courseId = null;

    private ?\DateTime $createdFrom = null;

    private ?\DateTime $createdTo = null;

    /**
     * @param string|null $courseId
     */
    public function setCourseId(?string $courseId): self
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCourseId(): ?string
    {
        return $this->courseId;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedFrom(): ?\DateTime
    {
        return $this->createdFrom;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedTo(): ?\DateTime
    {
        return $this->createdTo;
    }

    /**
     * @param \DateTime|null $createdFrom
     */
    public function setCreatedFrom(?\DateTime $createdFrom): self
    {
        $this->createdFrom = $createdFrom;

        return $this;
    }

    /**
     * @param \DateTime|null $createdTo
     */
    public function setCreatedTo(?\DateTime $createdTo): self
    {
        $this->createdTo = $createdTo;

        return $this;
    }

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
