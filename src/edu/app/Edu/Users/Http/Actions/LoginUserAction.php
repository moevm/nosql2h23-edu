<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Http\Requests\LoginUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginUserAction
{
    public function __invoke(LoginUserRequest $loginUserRequest): RedirectResponse
    {
        $attempt = Auth::attempt([
            'email' => $loginUserRequest->validated()['email'] ?? '',
            'password' => $loginUserRequest->validated()['password'] ?? ''
        ]);

        if ($attempt) {
            $loginUserRequest->session()->regenerate();

            return redirect()->intended('');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
