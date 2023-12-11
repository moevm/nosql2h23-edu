<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViewCourseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'page' => 'integer',
            'per-page' => 'integer',
            'filters' => 'array',
        ];
    }
}
