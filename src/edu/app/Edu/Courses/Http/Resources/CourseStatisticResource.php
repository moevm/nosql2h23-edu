<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Resources;

use App\Edu\Courses\Models\Course;
use App\Edu\Elements\Models\Element;
use App\Edu\UserElementStatistic\Http\Resources\UserElementStatisticResource;
use App\Edu\Users\Http\Resources\UserResource;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Course $resource
 */
class CourseStatisticResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->getKey(),
            'title' => $this->resource->title,
            'user_id' => UserResource::make($this->resource->user),
            'elements' => $this->extractElements($this->resource->elements),
        ];
    }

    /**
     * @param Collection<Element> $elements
     *
     * @return array
    */
    private function extractElements(Collection $elements): array
    {
        $extractedElements = [];
        foreach ($elements as $element) {
            $extractedElement = [
                'id' => $element->getKey(),
                'statistics' => UserElementStatisticResource::collection($element->statistics),
            ];

            $extractedElements[] = $extractedElement;
        }

        return $extractedElements;
    }
}
