<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Resources;

use App\Edu\Assignments\Http\Resources\AssignmentResource;
use App\Edu\Courses\Models\Course;
use App\Edu\Elements\Http\Resources\ElementResource;
use App\Edu\Users\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Course $resource
 */
class CourseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->getKey(),
            'title' => $this->resource->title,
            'description' => $this->resource->description,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
            'user' => UserResource::make($this->resource->user),
            'elements' => ElementResource::collection($this->resource->elements),
            'assignments' => AssignmentResource::collection($this->resource->assignments),
        ];
    }
}
