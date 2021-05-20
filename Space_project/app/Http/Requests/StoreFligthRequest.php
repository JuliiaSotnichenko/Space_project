<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFligthRequest extends FormRequest
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
            'flyref' => 'required|max:3',
            'dateOfDepart' => 'required|date|after:today',
            'timeOfDepart' => 'required',
            'file' => 'mimes:png,jpeg,jpg',
            'dateOfArrival' => 'required|date|after:dateOfDepart'
            //
        ];
    }
    public function messages()
    {
        return [
            'flyref.required' => 'Ref. is required',
            'flyref.max' => 'Max of 3 character.',
            'flyref.unique' => 'The Reference must be unique',

            'dateOfDepart.required' => 'A Date of depart is required.',
            'dateOfDepart.date' => 'Have to be a date type.',
            'dateOfDepart.after' => 'A Date of depart have to be bigger tham today.',

            'timeOfDepart.required' => 'time of depart is required',
            'dateOfArrival.required' => 'Date of Arrival is Required',
            'dateOfArrival.date' => 'Date of Arrival must be date type',
            'dateOfArrival.after' => 'Date of Arrival mus be bigger then A Date of depart'

        ];
    }
}
