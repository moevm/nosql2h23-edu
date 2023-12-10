<?php

declare(strict_types=1);

namespace App\Edu\Users\Repositories;

use App\Edu\Users\DTO\UsersFilterDTO;
use App\Edu\Users\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

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

    public function findOneById(string $userId): ?User
    {
        $user = $this->getUsersQueryBuilder()->find($userId);
        if (!$user instanceof User) {
            return null;
        }

        return $user;
    }

    public function isUserWithProvidedEmailExists(string $email): bool
    {
        return $this
            ->applyFilters(
                usersQueryBuilder: $this->getUsersQueryBuilder(),
                usersFilterDTO: (new UsersFilterDTO())->setEmail($email)
            )
            ->exists();
    }

    public function deleteById(string $userId): int
    {
        return $this
            ->getUsersQueryBuilder()
            ->where('_id', '=', $userId)
            ->delete();
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
