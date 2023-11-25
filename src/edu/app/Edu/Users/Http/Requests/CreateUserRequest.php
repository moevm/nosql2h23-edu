<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Requests;

use App\Edu\Roles\Enums\AvailableRoles;
use App\Edu\Users\Enums\UserGender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateUserRequest extends FormRequest
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
            'gender' => $this->getGenderValidationRules(),
            'role_title' => $this->getRoleTitleValidationRules(),
        ];
    }

    private function getRoleTitleValidationRules(): array
    {
        return [
            'required',
            'string',
            Rule::in(getEnumValues(AvailableRoles::class)),
        ];
    }

    private function getGenderValidationRules(): array
    {
        return [
            'required',
            'integer',
            Rule::in(getEnumValues(UserGender::class))
        ];
    }
}
