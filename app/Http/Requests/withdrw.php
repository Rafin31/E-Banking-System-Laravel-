<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class withdrw extends FormRequest
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
            'pin' => ['required'],
            'number' => ['required','min:11'],
            'amount' => ['required','regex:/[0-9]/'],
            'type' => ['required'],
            
        ];
    }
}
