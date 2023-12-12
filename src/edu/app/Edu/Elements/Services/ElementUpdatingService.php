<?php

declare(strict_types=1);

namespace App\Edu\Elements\Services;

use App\Edu\Elements\DTO\ElementUpdatingDTO;
use App\Edu\Elements\Models\Element;

class ElementUpdatingService
{
    public function update(Element $element, ElementUpdatingDTO $elementUpdatingDTO): bool
    {
        $title = $elementUpdatingDTO->getTitle();
        if ($title) {
            $element->title = $title;
        }

        $weight = $elementUpdatingDTO->getWeight();
        if ($weight) {
            $element->weight = $weight;
        }

        $type = $elementUpdatingDTO->getType();
        if ($type) {
            $element->type = $type;
        }

        $content = $elementUpdatingDTO->getContent();
        if ($content) {
            $element->content = $content;
        }

        return $element->save();
    }
}
