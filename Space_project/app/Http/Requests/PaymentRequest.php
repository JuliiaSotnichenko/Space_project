<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            "pass_port_number" => "required|string|alpha_num|max:255",
            "country" => "required|string|alpha|max:255",
            // "city" => "required|string|alpha|max:255",
            "email" => "required|email|max:255|unique:users",
            "password" => "required|password|alpha_dash|min:8|max:255",
        ];
    }
    
}
