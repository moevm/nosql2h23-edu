<?php

declare(strict_types=1);

namespace App\Http\Rules;

interface ValidationRuleInterface
{
    public static function get(): array;
}
