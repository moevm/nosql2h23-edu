<?php

declare(strict_types=1);

namespace App\Edu\Users\Assemblers;

use App\Edu\Users\DTO\UserUpdatingDTO;

class UserUpdatingDTOAssembler
{
    public function assemble(array $attributes): UserUpdatingDTO
    {
        $userUpdatingDTO = new UserUpdatingDTO();

        $email = $attributes['email'] ?? null;
        if ($email) {
            $userUpdatingDTO->setEmail($email);
        }

        $name = $attributes['name'] ?? null;
        if ($name) {
            $userUpdatingDTO->setName($name);
        }

        $surname = $attributes['surname'] ?? null;
        if ($surname) {
            $userUpdatingDTO->setSurname($surname);
        }

        $patronymic = $attributes['patronymic'] ?? null;
        if ($patronymic) {
            $userUpdatingDTO->setPatronymic($patronymic);
        }

        $dateBirth = $attributes['date_birth'] ?? null;
        if ($dateBirth) {
            $userUpdatingDTO->setDateBirth(new \DateTime($dateBirth));
        }

        $gender = $attributes['gender'] ?? null;
        if ($gender) {
            $userUpdatingDTO->setGender($gender);
        }

        return $userUpdatingDTO;
    }
}
