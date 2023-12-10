<?php

declare(strict_types=1);

namespace App\Http\Enums;

enum RouteRegularExpressions: string
{
    case MONGO_DB_IDENTIFIER = '[A-Za-z0-9]+';
}
