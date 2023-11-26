<?php

declare(strict_types=1);

namespace App\Http\Actions;

use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Support\Facades\View;

class ViewLoginFormAction
{
    public function __invoke(): ViewResponse
    {
        return View::make('login-form');
    }
}
