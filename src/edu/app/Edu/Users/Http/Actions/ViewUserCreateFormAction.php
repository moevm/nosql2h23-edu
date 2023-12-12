<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\View;

class ViewUserCreateFormAction
{
    public function __invoke(): ViewResponse
    {
        return View::make('users.view-create-form');
    }
}
