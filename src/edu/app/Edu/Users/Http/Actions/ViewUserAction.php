<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;

class ViewUserAction
{
    public function __invoke(
        string $userId,
        UserRepository $userRepository
    ): JsonResponse {
        $user = $userRepository->findOneById($userId);

        return response()->json();
    }
}
