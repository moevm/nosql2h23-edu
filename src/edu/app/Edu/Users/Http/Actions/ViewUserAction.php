<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Models\User;
use App\Edu\Users\Repositories\UserRepository;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\View;

class ViewUserAction
{
    public function __invoke(
        string $userId,
        UserRepository $userRepository
    ): ViewResponse {
        $user = $userRepository->findOneById($userId);
        if (!$user instanceof User) {
            throw new \RuntimeException('Provided user does not exist');
        }

        return View::make('users.user.view', [
            'user' => $user,
        ]);
    }
}
