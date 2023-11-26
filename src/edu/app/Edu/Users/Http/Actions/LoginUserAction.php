<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\DTO\CredentialsDTO;
use App\Edu\Users\Http\Requests\LoginUserRequest;
use App\Edu\Users\Services\UserAuthCheckingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class LoginUserAction
{
    public function __invoke(
        LoginUserRequest $loginUserRequest,
        UserAuthCheckingService $userAuthCheckingService
    ): JsonResponse {
        $credentialsDTO = new CredentialsDTO(
            email: $loginUserRequest->validated()['email'] ?? '',
            password: $loginUserRequest->validated()['password'] ?? ''
        );

        if ($userAuthCheckingService->attemptAuthUserWithProvidedCredentials($credentialsDTO)) {
            return response()->json();
        }

        return response()->json(status: 403);
    }
}
