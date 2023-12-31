<?php

declare(strict_types=1);

namespace App\Edu\Users\Repositories;

use App\Edu\Users\DTO\UsersFilterDTO;
use App\Edu\Users\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use MongoDB\Laravel\Relations\BelongsTo;

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

    public function findByIds(array $userIds, UsersFilterDTO $usersFilterDTO, bool $not = false): Collection
    {
        return $this
            ->applyFilters($this->getUsersQueryBuilder(), $usersFilterDTO)
            ->whereIn('_id', $userIds, not: $not)
            ->get();
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

        $surname = $usersFilterDTO->getSurname();
        if ($surname) {
            $usersQueryBuilder->where('surname', '=', $surname);
        }

        $userId = $usersFilterDTO->getUserId();
        if ($userId) {
            $usersQueryBuilder->where('_id', '=', $userId);
        }

        $createdFrom = $usersFilterDTO->getCreatedFrom();
        if ($createdFrom) {
            $usersQueryBuilder->where('created_at', '>=', $createdFrom);
        }

        $createdTo = $usersFilterDTO->getCreatedTo();
        if ($createdTo) {
            $usersQueryBuilder->where('created_at', '<=', $createdTo);
        }

        $userId = $usersFilterDTO->getUserId();
        if ($userId) {
            $usersQueryBuilder->where('_id', '=', $userId);
        }

        $roleTitle = $usersFilterDTO->getRoleTitle();
        if ($roleTitle) {
            $usersQueryBuilder->whereHas('role', function ($query) use ($roleTitle) {
                $query->where('title', '=', $roleTitle);
            });
        }

        return $usersQueryBuilder;
    }
}
