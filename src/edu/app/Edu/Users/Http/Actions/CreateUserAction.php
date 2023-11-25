<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Factories\UserFactory;
use App\Edu\Users\Http\Requests\CreateUserRequest;
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
