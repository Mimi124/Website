<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class OurGoalCreateRequest extends FormRequest
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
            'image' => ['required','image','max:3000'],
            'title'=> ['required','string','max:255'],
            'subtitle'=> ['required','string','max:255'],
            'description'=> ['required'],
            'vision'=> ['required','string'],
            'vision_des'=> ['required','string'],
            'leadership'=> ['required','string'],
            'leadership_des'=> ['required','string'],
            'button_link'=> ['required'],
            'status' => ['boolean']
        ];
    }
}
