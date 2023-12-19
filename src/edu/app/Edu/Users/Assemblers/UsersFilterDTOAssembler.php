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
            ->setRoleTitle($filters['role_title'] ?? null)
            ->setUserId($filters['user_id'] ?? null)
            ->setCreatedFrom(isset($filters['created_from']) ? new \DateTime($filters['created_from']) : null)
            ->setCreatedTo(isset($filters['created_to']) ? (new \DateTime($filters['created_to']))->modify('+ 1 day - 1 second') : null);
    }
}
