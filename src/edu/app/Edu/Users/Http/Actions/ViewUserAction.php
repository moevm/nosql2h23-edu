<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Roles\Specifications\IsUserHasAdminAccess;
use App\Edu\Users\Models\User;
use App\Edu\Users\Repositories\UserRepository;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ViewUserAction
{
    public function __invoke(
        string $userId,
        UserRepository $userRepository,
        IsUserHasAdminAccess $isUserHasAdminAccess
    ): ViewResponse {
        $user = $userRepository->findOneById($userId);
        if (!$user instanceof User) {
            throw new \RuntimeException('Provided user does not exist');
        }

        return View::make('users.view', [
            'user' => $user,
            'isAdmin' => $isUserHasAdminAccess->isSatisfiedBy(Auth::user()),
        ]);
    }
}
