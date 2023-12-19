<?php

declare(strict_types=1);

namespace App\Edu\Elements\DTO;

class ElementsFilterDTO
{
    private ?string $elementType = null;

    private ?string $elementTitle = null;

    private ?string $elementId = null;

    private ?string $description = null;

    /**
     * @param string|null $elementId
     */
    public function setElementId(?string $elementId): self
    {
        $this->elementId = $elementId;

        return $this;
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
     * @return string|null
     */
    public function getElementId(): ?string
    {
        return $this->elementId;
    }

    public function setElementType(?string $type): self
    {
        $this->elementType = $type;

        return $this;
    }

    public function setElementTitle(?string $title): self
    {
        $this->elementTitle = $title;

        return $this;
    }

    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    public function getElementTitle(): ?string
    {
        return $this->elementTitle;
    }
}
