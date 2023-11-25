<?php

declare(strict_types=1);

namespace App\Edu\Users\Factories;

use App\Edu\Roles\Models\Role;
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

        $role = Role::query()
            ->where('title', $attributes['role_title'])
            ->first();

        if (!$role) {
            throw new \RuntimeException('Could not create without role');
        }

        $user->role_id = $role->getKey();

        $savingResult = $user->save();
        if (!$savingResult) {
            throw new \RuntimeException('Could not create user');
        }

        return $user;
    }
}
