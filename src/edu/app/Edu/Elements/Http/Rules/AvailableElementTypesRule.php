<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Rules;

use App\Edu\Elements\Enums\AvailableElementTypes;
use App\Http\Rules\ValidationRuleInterface;
use Illuminate\Validation\Rule;

class AvailableElementTypesRule implements ValidationRuleInterface
{
    public static function get(): array
    {
        return [
            'required',
            'string',
            Rule::in(getEnumValues(AvailableElementTypes::class))
        ];
    }
}
