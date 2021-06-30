<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registrationForm extends FormRequest
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
            'address'    => ['required', 'min:5', 'max:30'],
            'user_name' => ['required', 'min:3', 'max:30', 'unique:users'],
            'email' => ['required', 'email', 'unique:users', 'min:8', 'max:30', 'email:rfc'],
            'phone_number' => ['required', 'min:11', 'max:15'],
            'user_type' => ['required'],
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],
            'con_password' => ['required', 'same:password']
        ];
    }

    public function messages()
    {
        return [
            'con_password.same' => 'Confirm Password Must be match',
            'con_password.required' => 'Confirm Password required',
            'password.required' => 'Password required',
            'email.email' => 'Invalid email address',
            'user_name.required' => 'User Name required ',
            'email.required' => 'Email required ',
            'phone_number.required' => 'Phone Number required '

        ];
    }
}
