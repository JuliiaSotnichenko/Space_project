<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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

            "first_name" => "required|string|alpha|max:255",
            "last_name" => "required|string|alpha|max:255",
            "pass_port_number" => "required|string|alphanumeric|max:255",
            "country" => "required|string|alpha|max:255",
            "role" => "required",
            "email" => "required|string|max:255|unique:users",
            "password" => "required|string|alphanumeric|min:8|max:255",
        ];
    }
}
