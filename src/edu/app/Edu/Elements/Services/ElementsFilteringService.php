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

        return $elements->filter(function (Element $element) use ($isNeedToFilterByType, $isNeedToFilterByTitle, $elementsFilterDTO) {
            $result = true;

            if (isNeedToUseAllFilteringCriteria($isNeedToFilterByTitle, $isNeedToFilterByType)) {
                return $element->type === $elementsFilterDTO->getElementType()
                    && $element->title === $elementsFilterDTO->getElementTitle();
            }

            if ($isNeedToFilterByType) {
                $result = $element->type === $elementsFilterDTO->getElementType();
            }

            if ($isNeedToFilterByTitle) {
                $result = $element->title === $elementsFilterDTO->getElementTitle();
            }

            return $result;
        });
    }
}
