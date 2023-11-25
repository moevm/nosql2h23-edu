<?php

declare(strict_types=1);

namespace App\Edu\Users\Assemblers;

use App\Edu\Users\DTO\UsersFilterDTO;

class UsersFilterDTOAssembler
{
    public function assemble(array $filters): UsersFilterDTO
    {
        $userFilterDTO = new UsersFilterDTO();

        $email = $filters['email'] ?? null;
        if ($email) {
            $userFilterDTO->setEmail($email);
        }

        return $userFilterDTO;
    }
}
