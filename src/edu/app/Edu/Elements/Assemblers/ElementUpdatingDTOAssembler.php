<?php

declare(strict_types=1);

namespace App\Edu\Elements\Assemblers;

use App\Edu\Elements\DTO\ElementUpdatingDTO;

class ElementUpdatingDTOAssembler
{
    public function assemble(array $attributes): ElementUpdatingDTO
    {
        return (new ElementUpdatingDTO())
            ->setType($attributes['title'] ?? null)
            ->setTitle($attributes['content'] ?? null)
            ->setContent($attributes['weight'] ?? null)
            ->setWeight($attributes['type'] ?? null);
    }
}
