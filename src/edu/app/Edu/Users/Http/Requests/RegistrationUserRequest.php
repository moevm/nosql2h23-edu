<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Requests;

use App\Edu\Users\Http\Rules\GenderValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'name' => 'required|alpha',
            'surname' => 'required|alpha',
            'patronymic' => 'required|alpha',
            'date_birth' => 'required|date',
            'password_confirmation' => 'required',
            'password' => 'required|confirmed',
            'gender' => GenderValidationRule::get(),
        ];
    }
}
