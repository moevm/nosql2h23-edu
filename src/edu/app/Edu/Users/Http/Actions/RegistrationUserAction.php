<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Assemblers\UserRegistrationDTOAssembler;
use App\Edu\Users\Http\Requests\RegistrationUserRequest;
use App\Edu\Users\Services\UserRegistrationService;
use Illuminate\Http\JsonResponse;

class RegistrationUserAction
{
    public function __invoke(
        RegistrationUserRequest $registrationUserRequest,
        UserRegistrationService $userRegistrationService,
        UserRegistrationDTOAssembler $userRegistrationDTOAssembler
    ): JsonResponse {
        $userRegistrationDTO = $userRegistrationDTOAssembler->assemble($registrationUserRequest->validated());

        $registrationErrors = $userRegistrationService->register($userRegistrationDTO)
            ->getErrorMessages();

        if (!empty($registrationErrors)) {
            return response()->json($registrationErrors);
        }

        return response()->json();
    }
}
