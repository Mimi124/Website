<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class TeamCreateRequest extends FormRequest
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
            'image' => ['required','image',],
            'title'=> ['required','string'],
            'subtitle'=> ['required','string'],
            'name'=> ['required','string'],
            'position'=> ['required','string'],
            'facebook_link'=> ['nullable'],
            'twitter_link'=> ['nullable'],
            'insta_link'=> ['nullable'],
            'status' => ['boolean']
        ];
    }
}
