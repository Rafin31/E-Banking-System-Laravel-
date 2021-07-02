<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class gas extends FormRequest
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
            'b_month'=>['required'],
            'c_code'=>['required','regex:/[0-9]/'],
            'acc_num'=>['required','regex:/[0-9]/'],
            'amount'=>['required','regex:/[0-9]/'],
            'password'=>['required'],
            'type'=>['required'],

        ];
    }
}
