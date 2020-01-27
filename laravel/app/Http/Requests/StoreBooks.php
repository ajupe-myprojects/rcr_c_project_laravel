<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBooks extends FormRequest
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
            'title' => 'bail|required|max:100|alpha_dash',
            'author' => 'bail|required|max:100|alpha_dash',
            'description' => 'required',
            'isbn' => 'bail|required|max:20|alpha_dash',
        ];
    }
}
