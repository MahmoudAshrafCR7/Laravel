<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OrderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules(){


        return [
            'id' =>Rule::unique('orders')->ignore($this->old_id) ,
            'title_en' => 'required|max:20|min:5',
            'title_ar' => 'required |max:20|min:5',
            'description_en' => 'required',
            'description_ar' => 'required',
            'ord_image' => 'image|mimes:png,jpg|max:2048'
        ];
    }
}
