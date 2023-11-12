<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class TeamsUpdateRequest extends FormRequest
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
            'image' => ['nullable','image',],
            'title'=> ['nullable','string'],
            'subtitle'=> ['nullable','string'],
            'position'=> ['nullable','string'],
            'facebook_link'=> ['nullable'],
            'twitter_link'=> ['nullable'],
            'insta_link'=> ['nullable'],
            'status' => ['boolean']
        ];
    }
}
