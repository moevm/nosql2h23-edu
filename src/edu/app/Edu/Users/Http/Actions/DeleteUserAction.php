<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;

class DeleteUserAction
{
    public function __invoke(
        string $userId,
        UserRepository $userRepository
    ): RedirectResponse {
        $userRepository->deleteById($userId);

        return back();
    }
}
