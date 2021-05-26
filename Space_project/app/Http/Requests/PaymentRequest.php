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
            "NameOnCard" => "required|string|alpha|max:255",
            "CreditCardNumber" => "required|string|alpha_num|max:255",
            "ExpiryDate" => "required",
            "SecurityCode" => "required",
           
        ];
    }
    
}
