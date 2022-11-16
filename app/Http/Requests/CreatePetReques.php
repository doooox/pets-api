<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePetReques extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'animal'=> 'required|string|min:2|max:30',
            'name' => 'required|string|min:2|max:30',
            'age' => 'required|integer|min:1|max:15',
            'owner' => 'required|string|min:2|max:30',
        ];
    }
}
