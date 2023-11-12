<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class FeatureCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'icon' => ['required', 'max:50'],
            'title' => ['nullable', 'max:255'],
            'subtitle' => ['nullable', 'max:255'],
            'twi' => ['nullable', 'max:255'],
            'description' => ['nullable', 'max:500'],
            'status' => ['required', 'boolean']
        ];
    }
}
