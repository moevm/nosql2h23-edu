<?php

declare(strict_types=1);

namespace App\Edu\Users\Assemblers;

use App\Edu\Users\DTO\UserUpdatingDTO;

class UserUpdatingDTOAssembler
{
    public function assemble(array $attributes): UserUpdatingDTO
    {
        return (new UserUpdatingDTO())
            ->setEmail($attributes['email'] ?? null)
            ->setName($attributes['name'] ?? null)
            ->setSurname($attributes['surname'] ?? null)
            ->setPatronymic($attributes['patronymic'] ?? null)
            ->setDateBirth($attributes['date_birth'] ?? null)
            ->setGender($attributes['gender'] ?? null);
    }
}
