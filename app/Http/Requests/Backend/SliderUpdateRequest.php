<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
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
            'image' => ['nullable','image','max:3000'],
            'title'=> ['nullable','string','max:255'],
            'subtitle'=> ['nullable','string','max:255'],
            'description'=> ['nullable','string','max:255'],
            'button_link'=> ['nullable'],
            'status' => ['boolean']
        ];
    }
}
