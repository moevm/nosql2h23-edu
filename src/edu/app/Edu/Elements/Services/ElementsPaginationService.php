<?php

declare(strict_types=1);

namespace App\Edu\Elements\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ElementsPaginationService
{
    private const DEFAULT_PAGE = 1;

    private const DEFAULT_PER_PAGE = 5;

    private const DEFAULT_OPTIONS = [];

    public function paginate(
        Collection $elements,
        $perPage = self::DEFAULT_PER_PAGE,
        $page = null,
        $options = self::DEFAULT_OPTIONS
    ): LengthAwarePaginator {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: self::DEFAULT_PAGE);

        return new LengthAwarePaginator(
            items: $elements->forPage($page, $perPage),
            total: $elements->count(),
            perPage: $perPage,
            currentPage: $page,
            options: $options
        );
    }
}
