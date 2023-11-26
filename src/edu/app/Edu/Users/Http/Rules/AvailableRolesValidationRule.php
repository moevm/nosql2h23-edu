<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Rules;

use App\Edu\Roles\Enums\AvailableRoles;
use Illuminate\Validation\Rule;

class AvailableRolesValidationRule implements ValidationRuleInterface
{
    public static function get(): array
    {
        return [
            'required',
            'string',
            Rule::in(getEnumValues(AvailableRoles::class)),
        ];
    }
}
