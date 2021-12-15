<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'bail|required|between:5,20|alpha',
            'email' => 'bail|required|email|unique:users',
            'password' => 'bail|min:8|required_with:confirm-password|confirmed',
        ];
    }
}
