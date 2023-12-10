<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCourseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'string',
            'description' => 'string',
        ];
    }
}
