<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscrireFormRequest extends FormRequest
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
            'user' => ['required'],
            'firstname' => ['required', 'string', 'min:4'],
            'lastname' => ['required', 'string', 'min:4'],
            'email' => ['required', 'email', 'min:4'],
            'phone' => ['required', 'string', 'min:7'],
            'describ' => ['required', 'string', 'min:4'],
        ];
    }
}
