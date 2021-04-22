<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitStoreRequest extends FormRequest
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
            'street' => 'required|string|max:255',
            'number' => 'required|string|max:8',
            'postcode' => 'required|string|max:6',
            'city' => 'required|string|min:3',
            'nip' => 'required|digits:10',
            'regon' =>  'required|digits:9'
        ];
    }
}
