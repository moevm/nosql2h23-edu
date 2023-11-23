<?php

declare(strict_types=1);

namespace App\Edu\Users\Repositories;

use App\Edu\Users\DTO\UsersFilterDTO;
use App\Edu\Users\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class UserRepository
{
    public function getFilteredUsersPage(
        int $page,
        int $perPage,
        UsersFilterDTO $usersFilterDTO
    ): LengthAwarePaginator {
        return $this
            ->applyFilters(
                usersQueryBuilder: $this->getUsersQueryBuilder(),
                usersFilterDTO: $usersFilterDTO
            )
            ->paginate(
                perPage: $perPage,
                page: $page
            );
    }

    private function getUsersQueryBuilder(): Builder
    {
        return User::query();
    }

    private function applyFilters(
        Builder $usersQueryBuilder,
        UsersFilterDTO $usersFilterDTO
    ): Builder {
        $email = $usersFilterDTO->getEmail();
        if ($email) {
            $usersQueryBuilder->where('email', '=', $email);
        }

        return $usersQueryBuilder;
    }
}
