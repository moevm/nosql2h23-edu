<?php

declare(strict_types=1);

namespace App\Edu\Roles\Specifications;

use App\Edu\Roles\Enums\AvailableRoles;
use App\Edu\Users\Models\User;

class IsUserHasAdminAccess
{
    public function isSatisfiedBy(?User $user): bool
    {
        return $user->role->title === AvailableRoles::ADMIN->value;
    }
}
