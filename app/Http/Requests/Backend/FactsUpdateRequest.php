<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class FactsUpdateRequest extends FormRequest
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
            //
            'image' => ['nullable','image','max:3000'],
            'title'=> ['nullable','string','max:255'],
            'subtitle'=> ['nullable','string','max:255'],
            'project_counter'=> ['nullable','string','max:255'],
        ];
    }
}
