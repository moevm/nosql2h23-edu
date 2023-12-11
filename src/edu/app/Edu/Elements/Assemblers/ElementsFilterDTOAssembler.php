<?php

declare(strict_types=1);

namespace App\Edu\Elements\Assemblers;

use App\Edu\Elements\DTO\ElementsFilterDTO;

class ElementsFilterDTOAssembler
{
    public function assemble(array $filters): ElementsFilterDTO
    {
        return $elementsFilterDTO = (new ElementsFilterDTO())
            ->setElementType($filters['type'] ?? null)
            ->setElementTitle($filters['title'] ?? null);
    }
}
