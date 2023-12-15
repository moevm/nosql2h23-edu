<?php

declare(strict_types=1);

namespace App\Http\Actions;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LogoutAction
{
    public function __invoke(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('login.view-form');
    }
}
