<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FirefighterStoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'middle_name' => 'string|max:255',
            'surname' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'user_id' => ''
        ];
    }
}
