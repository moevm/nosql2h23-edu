<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'email',
            'name' => 'alpha',
            'surname' => 'alpha',
            'patronymic' => 'alpha',
            'date_birth' => 'date',
            'gender' => 'integer|in:0,1',
        ];
    }
}
