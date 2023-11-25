<?php

declare(strict_types=1);

if (!function_exists('getEnumCasesValues')) {
    function getEnumCasesValues($enum, ?array $cases = null): array
    {
        $selectedCases = $cases ?? $enum::cases();

        return array_column($selectedCases, 'value');
    }
}
