<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Edu\Roles\Specifications\IsUserHasAdminAccess;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ViewMainPageAction
{
    public function __invoke(IsUserHasAdminAccess $isUserHasAdminAccess): ViewResponse
    {
        return View::make('main', ['isAdmin' => $isUserHasAdminAccess->isSatisfiedBy(Auth::user())]);
    }
}
