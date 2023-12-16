<?php

declare(strict_types=1);

namespace App\Edu\Elements\Assemblers;

use App\Edu\Elements\DTO\ElementUpdatingDTO;

class ElementUpdatingDTOAssembler
{
    public function assemble(array $attributes): ElementUpdatingDTO
    {
        return (new ElementUpdatingDTO())
            ->setType($attributes['type'] ?? null)
            ->setTitle($attributes['title'] ?? null)
            ->setContent($attributes['content'] ?? null)
            ->setWeight((float)$attributes['weight'] ?? null);
    }
}
