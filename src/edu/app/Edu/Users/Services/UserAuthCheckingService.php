<?php

declare(strict_types=1);

namespace App\Edu\Users\Services;

use App\Edu\Users\DTO\CredentialsDTO;
use App\Edu\Users\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserAuthCheckingService
{
    public function __construct(
        private readonly UserRepository $userRepository
    ) {
    }

    public function attemptAuthUserWithProvidedCredentials(CredentialsDTO $credentialsDTO): bool
    {
        $isUserAuthorized = false;

        $assumedUser = $this->userRepository->findOneByEmail($credentialsDTO->getEmail());
        if ($assumedUser) {
            $isUserAuthorized = Hash::check($credentialsDTO->getPassword(), $assumedUser->password);
        }

        return $isUserAuthorized;
    }
}
