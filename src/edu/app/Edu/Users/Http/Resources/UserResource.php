<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Resources;

use App\Edu\Roles\Http\Resources\RoleResource;
use App\Edu\Users\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property User $resource
 */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->getKey(),
            'email' => $this->resource->email,
            'password' => $this->resource->password,
            'name' => $this->resource->name,
            'surname' => $this->resource->surname,
            'patronymic' => $this->resource->patronymic,
            'date_birth' => $this->resource->date_birth,
            'gender' => $this->resource->gender,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
            'role' => RoleResource::make($this->resource->role),
        ];
    }
}
