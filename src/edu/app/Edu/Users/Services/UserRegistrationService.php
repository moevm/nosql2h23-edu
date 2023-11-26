<?php

declare(strict_types=1);

namespace App\Edu\Users\Services;

use App\Edu\Users\DTO\UserRegistrationDTO;
use App\Edu\Users\DTO\UserRegistrationErrorsDTO;
use App\Edu\Users\Factories\UserFactory;
use App\Edu\Users\Repositories\UserRepository;

class UserRegistrationService
{
    public function __construct(private readonly UserRepository $userRepository)
    {
    }

    public function register(UserRegistrationDTO $userRegistrationDTO): UserRegistrationErrorsDTO
    {
        $userRegistrationErrorsDTO = new UserRegistrationErrorsDTO();

        $isUserWithProvidedEmailAlreadyExists = $this->userRepository->isUserWithProvidedEmailExists($userRegistrationDTO->getEmail());

        if ($isUserWithProvidedEmailAlreadyExists) {
            $userRegistrationErrorsDTO->addErrorMessage(['email' => 'User with provided email has already exists']);
        } else {
            UserFactory::create($userRegistrationDTO->toArray());
        }

        return $userRegistrationErrorsDTO;
    }
}
