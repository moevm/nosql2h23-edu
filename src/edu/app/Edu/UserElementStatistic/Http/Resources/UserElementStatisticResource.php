<?php

declare(strict_types=1);

namespace App\Edu\UserElementStatistic\Http\Resources;

use App\Edu\UserElementStatistic\Models\UserElementStatistic;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property UserElementStatistic $resource
 */
class UserElementStatisticResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->getKey(),
            'user_id' => $this->resource->user_id,
            'element_id' => $this->resource->element_id,
            'points' => $this->resource->points,
        ];
    }
}
