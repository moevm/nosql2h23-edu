<?php

declare(strict_types=1);

namespace App\Edu\Elements\Services;

use App\Edu\Elements\DTO\ElementsFilterDTO;
use App\Edu\Elements\Models\Element;
use Illuminate\Database\Eloquent\Collection;

class ElementsFilteringService
{
    public function filter(Collection $elements, ElementsFilterDTO $elementsFilterDTO): Collection
    {
        $isNeedToFilterByType = (bool)$elementsFilterDTO->getElementType();
        $isNeedToFilterByTitle = (bool)$elementsFilterDTO->getElementTitle();
        $isNeedToFilterById = (bool)$elementsFilterDTO->getElementId();
        $isNeedToFilterByDescription = (bool)$elementsFilterDTO->getDescription();

        return $elements->filter(function (Element $element) use (
            $isNeedToFilterByType,
            $isNeedToFilterByTitle,
            $isNeedToFilterById,
            $isNeedToFilterByDescription,
            $elementsFilterDTO
        ) {
            $result = true;

            if (isNeedToUseAllFilteringCriteria($isNeedToFilterByTitle, $isNeedToFilterByType, $isNeedToFilterById, $isNeedToFilterByDescription)) {
                return $element->type === $elementsFilterDTO->getElementType()
                    && $element->title === $elementsFilterDTO->getElementTitle()
                    && $element->getKey() === $elementsFilterDTO->getElementId()
                    && $element->content === $elementsFilterDTO->getDescription();
            }

            if ($isNeedToFilterByType) {
                $result = $element->type === $elementsFilterDTO->getElementType();
            }

            if ($isNeedToFilterByDescription) {
                $result = $element->content === $elementsFilterDTO->getDescription();
            }

            if ($isNeedToFilterById) {
                $result = $element->getKey() === $elementsFilterDTO->getElementId();
            }

            if ($isNeedToFilterByTitle) {
                $result = $element->title === $elementsFilterDTO->getElementTitle();
            }

            return $result;
        });
    }
}
