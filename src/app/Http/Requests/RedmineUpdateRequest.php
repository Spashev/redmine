<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RedmineUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:255',
            'identifier' => 'sometimes|string|max:255',
            'description' => 'sometimes|string'
        ];
    }
}
