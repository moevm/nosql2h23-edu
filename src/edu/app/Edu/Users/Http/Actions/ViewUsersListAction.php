<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Roles\Specifications\IsUserHasAdminAccess;
use App\Edu\Users\Assemblers\UsersFilterDTOAssembler;
use App\Edu\Users\Http\Requests\ViewUsersListRequest;
use App\Edu\Users\Repositories\UserRepository;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ViewUsersListAction
{
    private const DEFAULT_PAGE = 1;

    private const DEFAULT_PER_PAGE = 25;

    private const DEFAULT_FILTERS = [];

    public function __invoke(
        ViewUsersListRequest $viewUsersListRequest,
        UserRepository $userRepository,
        UsersFilterDTOAssembler $usersFilterDTOAssembler,
        IsUserHasAdminAccess $isUserHasAdminAccess
    ): ViewResponse {
        $filteredUsersPage = $userRepository->getFilteredUsersPage(
            page: (int) $viewUsersListRequest->get('page', self::DEFAULT_PAGE),
            perPage: (int) $viewUsersListRequest->get('per-page', self::DEFAULT_PER_PAGE),
            usersFilterDTO: $usersFilterDTOAssembler->assemble(
                filters: $viewUsersListRequest->get('filters', self::DEFAULT_FILTERS)
            )
        );

        return View::make('users.list', [
            'filteredUsersPage' => $filteredUsersPage,
            'isAdmin' => $isUserHasAdminAccess->isSatisfiedBy(Auth::user()),
        ]);
    }
}
