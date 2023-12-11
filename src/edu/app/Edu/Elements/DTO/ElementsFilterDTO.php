<?php

declare(strict_types=1);

namespace App\Edu\Elements\DTO;

class ElementsFilterDTO
{
    private ?string $elementType = null;

    private ?string $elementTitle = null;

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
