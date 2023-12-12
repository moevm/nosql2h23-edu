<?php

declare(strict_types=1);

namespace App\Edu\UserElementStatistic\Repositories;

use App\Edu\UserElementStatistic\Models\UserElementStatistic;
use Illuminate\Database\Eloquent\Builder;

class UserElementStatisticRepository
{
    private function getStatisticQueryBuilder(): Builder
    {
        return UserElementStatistic::query();
    }

    public function getElementsStatsCountForUser(array $elementIds, string $userId): int
    {
        return $this->getStatisticQueryBuilder()
            ->where('user_id', '=', $userId)
            ->whereIn('element_id', $elementIds)->count();
    }
}
