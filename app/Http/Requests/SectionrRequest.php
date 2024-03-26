<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SectionrRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'id' =>Rule::unique('sections')->ignore($this->old_id) ,
            'name_en' => 'required|max:20|min:4',
            'name_ar' => 'required|max:20|min:4',
            'descripton_en' => 'required',
            'descripton_ar' => 'required',
            'status' => 'required',
            'sec_image' => 'image|mimes:png,jpg|max:2048'
        ];
    }
}
