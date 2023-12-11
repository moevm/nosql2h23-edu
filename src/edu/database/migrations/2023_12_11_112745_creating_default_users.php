<?php

declare(strict_types=1);

use App\Edu\Roles\Enums\AvailableRoles;
use App\Edu\Users\Enums\UserGender;
use App\Edu\Users\Factories\UserFactory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private const PASSWORD = '123456';

    public function up(): void
    {
        $adminAttributes = [
            'email' => 'tolya@mail.ru',
            'password' => static::PASSWORD,
            'name' => 'Анатолий',
            'surname' => 'Денежный',
            'patronymic' => 'Антонович',
            'date_birth' => '2002-07-17',
            'gender' => UserGender::MALE->value,
            'role_title' => AvailableRoles::ADMIN->value,
        ];
        $firstUserAttributes = [
            'email' => 'liza@mail.ru',
            'password' => static::PASSWORD,
            'name' => 'Елизавета',
            'surname' => 'Костебелова',
            'patronymic' => 'Константиновна',
            'date_birth' => '2002-14-09',
            'gender' => UserGender::FEMALE->value,
            'role_title' => AvailableRoles::REGULAR_USER->value,
        ];
        $secondUserAttributes = [
            'email' => 'katya@mail.ru',
            'password' => static::PASSWORD,
            'name' => 'Екатерина',
            'surname' => 'Курочкина',
            'patronymic' => 'Александровна',
            'date_birth' => '2002-07-10',
            'gender' => UserGender::FEMALE->value,
            'role_title' => AvailableRoles::REGULAR_USER->value,
        ];

        $usersAttributes = [$adminAttributes, $firstUserAttributes, $secondUserAttributes];
        foreach ($usersAttributes as $attributes) {
            UserFactory::create($attributes);
        }
    }

    public function down(): void
    {
        Schema::connection('mongodb')->dropIfExists('users');
    }
};
