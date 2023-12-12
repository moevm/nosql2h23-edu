<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http\Requests;

use App\Edu\Elements\Http\Rules\AvailableElementTypesRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateElementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'weight' => 'required|decimal:1',
            'type' => AvailableElementTypesRule::get(),
        ];
    }
}
