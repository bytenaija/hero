<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'Firstname' => 'required',
           'Lastname' => 'required',
            'email'=> 'required|email',
            'password'=> 'required|min:8',
           'phone_number' => 'required'
        ];
    }
}
