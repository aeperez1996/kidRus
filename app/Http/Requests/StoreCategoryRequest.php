<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'name'=>'required|string|max:50',
            'description'=>'nulleable|string|max:255',
            
        ];
    }
    public function messages()
    {
        return[
        'name.required'=>'Este campo es requerido.',
        'name.string'=>'el valor no es correcto.',
        'name.max'=>'solo se permite 50 caracteres.',
        ];
       
    }
    
}
