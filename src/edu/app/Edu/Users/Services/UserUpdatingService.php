<?php

declare(strict_types=1);

namespace App\Edu\Users\Services;

use App\Edu\Users\DTO\UserUpdatingDTO;
use App\Edu\Users\Models\User;

class UserUpdatingService
{
    public function update(User $user, UserUpdatingDTO $userUpdatingDTO): bool
    {
        $email = $userUpdatingDTO->getEmail();
        if ($email) {
            $user->email = $email;
        }

        $name = $userUpdatingDTO->getName();
        if ($name) {
            $user->name = $name;
        }

        $surname = $userUpdatingDTO->getSurname();
        if ($surname) {
            $user->surname = $surname;
        }

        $patronymic = $userUpdatingDTO->getPatronymic();
        if ($patronymic) {
            $user->patronymic = $patronymic;
        }

        $dateBirth = $userUpdatingDTO->getDateBirth();
        if ($dateBirth) {
            $user->date_birth = $dateBirth;
        }

        $gender = $userUpdatingDTO->getGender();
        if ($gender) {
            $user->gender = $gender;
        }

        return $user->save();
    }
}
