<?php

declare(strict_types=1);

namespace App\Edu\Users\Factories;

use App\Edu\Users\Models\User;
use Illuminate\Support\Facades\Hash;

class UserFactory
{
    public static function create(array $attributes): User
    {
        $user = new User();

        $user->email = $attributes['email'];
        $user->password = Hash::make($attributes['password']);
        $user->name = $attributes['name'];
        $user->surname = $attributes['surname'];
        $user->patronymic = $attributes['patronymic'];
        $user->date_birth = $attributes['date_birth'];
        $user->gender = $attributes['gender'];

        $savingResult = $user->save();
        if (!$savingResult) {
            throw new \RuntimeException('Could not create user');
        }

        return $user;
    }
}
