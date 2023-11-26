<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Rules;

use App\Edu\Users\Enums\UserGender;
use Illuminate\Validation\Rule;

class GenderValidationRule implements ValidationRuleInterface
{
    public static function get(): array
    {
        return [
            'required',
            'integer',
            Rule::in(getEnumValues(UserGender::class))
        ];
    }
}
