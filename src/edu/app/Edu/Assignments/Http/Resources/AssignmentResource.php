<?php

declare(strict_types=1);

namespace App\Edu\Assignments\Http\Resources;

use App\Edu\Assignments\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Assignment $resource
 */
class AssignmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->getKey(),
            'user_id' => $this->resource->user_id,
            'course_id' => $this->resource->course_id,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
