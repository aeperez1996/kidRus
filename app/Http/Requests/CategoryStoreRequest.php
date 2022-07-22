<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class CategoryStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'unique|required|string|max:50',
            'description'=>'nulleable|string|max:255',
            
        ];
    }
    public function messages()
    {
        return[
        'name.required'=>'Este campo es requerido.',
        'name.string'=>'el valor no es correcto.',
        'name.max'=>'solo se permite 50 caracteres.',
        'description.string'=>'el valor no es correcto.',
        'description.max'=>'solo se permite 255 caracteres.',];
       
    }
    
}
