<?php

declare(strict_types=1);

if (!function_exists('getEnumValues')) {
    function getEnumValues($enum, ?array $cases = null): array
    {
        $selectedCases = $cases ?? $enum::cases();

        return array_column($selectedCases, 'value');
    }
}
