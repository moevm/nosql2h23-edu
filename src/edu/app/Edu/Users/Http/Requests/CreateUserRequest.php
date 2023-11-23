<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Requests;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest implements Arrayable
{
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'name' => 'required|alpha',
            'surname' => 'required|alpha',
            'patronymic' => 'required|alpha',
            'date_birth' => 'required|date',
            'gender' => 'required|integer|in:0,1',
            'password_confirmation' => 'required',
            'password' => 'required|confirmed',
        ];
    }
}
