<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Http\Requests\EditUserRequest;
use Illuminate\Http\JsonResponse;

class EditUserAction
{
    public function __invoke(
        string $userId,
        EditUserRequest $editUserRequest
    ): JsonResponse {


        return response()->json();
    }
}
