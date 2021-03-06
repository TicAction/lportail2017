<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolRequest extends FormRequest
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
            'school_name'=>'required',
            'school_adress'=>'required',
            'school_email'=>'required|email',
            'school_phone'=>'required',
            'schoolboard_id'=>'required',
        ];
    }
}
