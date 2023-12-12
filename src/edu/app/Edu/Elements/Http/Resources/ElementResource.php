<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Resources;

use App\Edu\Elements\Models\Element;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Element $resource
 */
class ElementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->getKey(),
            'type' => $this->resource->type,
            'title' => $this->resource->title,
            'content' => $this->resource->content,
            'weight' => $this->resource->weight,
            'course_id' => $this->resource->course_id,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
