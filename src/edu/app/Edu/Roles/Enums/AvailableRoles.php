<?php

declare(strict_types=1);

namespace App\Edu\Users\Enums;

enum AvailableRoles: string
{
    case REGULAR_USER = 'Пользователь';

    case ADMIN = 'Администратор';
}
