<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Http\Requests\CreateUserRequest;
use App\Edu\Users\Models\Factories\UserFactory;
use Illuminate\Http\JsonResponse;

class CreateUserAction
{
    public function __invoke(
        CreateUserRequest $createUserRequest
    ): JsonResponse {
        UserFactory::create($createUserRequest->all());

        return response()->json();
    }
}
