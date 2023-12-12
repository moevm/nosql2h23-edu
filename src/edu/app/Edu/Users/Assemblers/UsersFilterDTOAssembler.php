<?php

declare(strict_types=1);

namespace App\Edu\Users\Assemblers;

use App\Edu\Users\DTO\UsersFilterDTO;

class UsersFilterDTOAssembler
{
    public function assemble(array $filters): UsersFilterDTO
    {
        return (new UsersFilterDTO())
            ->setEmail($filters['email'] ?? null)
            ->setSurname($filters['surname'] ?? null)
            ->setRoleTitle($filters['role_title'] ?? null);
    }
}
