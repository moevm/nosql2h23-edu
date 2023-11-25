<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Assemblers\UserUpdatingDTOAssembler;
use App\Edu\Users\Http\Requests\EditUserRequest;
use App\Edu\Users\Repositories\UserRepository;
use App\Edu\Users\Services\UserUpdatingService;
use Illuminate\Http\JsonResponse;

class EditUserAction
{
    public function __invoke(
        string $userId,
        EditUserRequest $editUserRequest,
        UserRepository $userRepository,
        UserUpdatingDTOAssembler $userUpdatingDTOAssembler,
        UserUpdatingService $userUpdatingService
    ): JsonResponse {
        $user = $userRepository->findOneById($userId);
        if (!$user) {
            throw new \DomainException('User to update was not found');
        }

        $userUpdatingDTO = $userUpdatingDTOAssembler->assemble($editUserRequest->all());

        $userUpdatingService->update($user, $userUpdatingDTO);

        return response()->json();
    }
}
