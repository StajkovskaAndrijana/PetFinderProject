<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPetValidation extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:50',
            'type' => 'required',
            'country' => 'required',
            'image' => 'required',
            'short_description' => 'required|string|min:4|max:100',
            'characteristics' => 'required|string',
            'coat' => 'required',
            'trained' => 'required',
            'good_with' => 'required',
            'size' => 'required',
            'gender' => 'required',
            'long_description' => 'required|min:10|max:500'
        ];
    }
}
