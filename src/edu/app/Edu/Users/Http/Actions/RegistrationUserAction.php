<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Assemblers\UserRegistrationDTOAssembler;
use App\Edu\Users\Http\Requests\RegistrationUserRequest;
use App\Edu\Users\Services\UserRegistrationService;
use Illuminate\Http\RedirectResponse;

class RegistrationUserAction
{
    public function __invoke(
        RegistrationUserRequest $registrationUserRequest,
        UserRegistrationService $userRegistrationService,
        UserRegistrationDTOAssembler $userRegistrationDTOAssembler
    ): RedirectResponse {
        $userRegistrationDTO = $userRegistrationDTOAssembler->assemble($registrationUserRequest->validated());

        $registrationErrors = $userRegistrationService->register($userRegistrationDTO)
            ->getErrorMessages();

        if (!empty($registrationErrors)) {
            return back()->withErrors($registrationErrors)->withInput();
        }

        return redirect()->route('login.view-form');
    }
}
