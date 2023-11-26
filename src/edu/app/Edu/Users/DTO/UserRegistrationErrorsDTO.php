<?php

declare(strict_types=1);

namespace App\Edu\Users\DTO;

class UserRegistrationErrorsDTO
{
    private array $errorMessages = [];

    public function addErrorMessage(array $errorMessage): self
    {
        $this->errorMessages[] = $errorMessage;

        return $this;
    }

    public function getErrorMessages(): array
    {
        return $this->errorMessages;
    }
}
