<?php

declare(strict_types=1);

namespace App\Edu\Users\Assemblers;

use App\Edu\Roles\Enums\AvailableRoles;
use App\Edu\Users\DTO\UserRegistrationDTO;
use App\Edu\Users\Enums\UserGender;

class UserRegistrationDTOAssembler
{
    public function assemble(array $attributes): UserRegistrationDTO
    {
        return new UserRegistrationDTO(
            email: $attributes['email'] ?? '',
            name: $attributes['name'] ?? '',
            surname: $attributes['surname'] ?? '',
            patronymic: $attributes['patronymic'] ?? '',
            dateBirth: $attributes['date_birth'] ? new \DateTime($attributes['date_birth']) : new \DateTime(),
            password: $attributes['password'] ?? '',
            gender: (int) $attributes['gender'] ?? UserGender::MALE->value,
            roleTitle: AvailableRoles::REGULAR_USER->value,
        );
    }
}
