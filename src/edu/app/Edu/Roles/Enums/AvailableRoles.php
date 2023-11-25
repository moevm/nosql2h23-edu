<?php

declare(strict_types=1);

namespace App\Edu\Roles\Enums;

enum AvailableRoles: string
{
    case REGULAR_USER = 'Пользователь';

    case ADMIN = 'Администратор';
}
