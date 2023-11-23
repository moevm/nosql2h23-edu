<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;

class DeleteUserAction
{
    public function __invoke(
        string $userId,
        UserRepository $userRepository
    ): JsonResponse
    {
        $userRepository->deleteById($userId);

        return response()->json();
    }
}
