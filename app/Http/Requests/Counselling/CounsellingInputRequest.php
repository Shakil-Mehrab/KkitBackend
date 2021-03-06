<?php

namespace App\Http\Requests\Counselling;

use Illuminate\Foundation\Http\FormRequest;

class CounsellingInputRequest extends FormRequest
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
            'customer_name'=>'required',
            'phone'=>'required',
            'customer_email'=>'required|max:50',
        ];
    }
}
