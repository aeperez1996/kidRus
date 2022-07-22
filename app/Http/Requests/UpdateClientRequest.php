<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name'=>'string|required|max:255',
            'dni'=>'string|required|unique:clients,dni,'.$this->route('client')->id.'|min:8',
            'ruc'=>'string|required|unique:clients,ruc,'.$this->route('client')->id.'|min:11',
            'address'=>'string|required|max:255',
            'phone'=>'string|required|unique:clients,phone,'.$this->route('client')->id.'|min:9',
            'email'=>'string|required|unique:clients,email,'.$this->route('client')->id.'|min:11|email:rfc,dns',
        ];
    }
    public function messages()
    {
        return[
        'name.required'=>'Este campo es requerido.',
        'name.string'=>'el valor no es correcto.',
        'name.max'=>'solo se permite 255 caracteres.',

        'dni.string'=>'el valor no es correcto.',
        'dni.required'=>'este campo es requerido.',
        'dni.uniqued'=>'este dni ya se encuentra registrado',
        'dni.min'=>'Se requiere de 8 caracteres.',
        'dni.max'=>'Solo se permite 8 caracteres',

        'ruc.string'=>'El valor no es correcto',
        'ruc.unique'=>'El numero de ruc ya se encuentra registrado',
        'ruc.min'=>'Se requiere de 8 caracteres.',
        'ruc.max'=>'Solo se permite 8 caracteres',

        'address.string'=>'el valor no es correcto.',
        'address.max'=>'Solo se permite 255 caracteres',

        
        'phone.string'=>'el valor no es correcto.',
        'phone.uniqued'=>'este numero de telefono ya se encuentra registrado',
        'phone.min'=>'Se requiere de 9 caracteres.',
        'phone.max'=>'Solo se permite 9 caracteres',
         
        'email.string'=>'el valor no es correcto.',
        'email.unique'=>'la dirieccion de correo electronico ya se encuentra registrada',
        'email.email'=>'no es un correo electronico',
        'email.max'=>'Solo se permite 255 caracteres',

        'sell_price.required'=>'El campo es requerido',

        'category_id.interger'=>'el valor tiene que ser entero',
        'category_id.required'=>'el campo es requerido',
        'category_id.exists'=>'la categoria no existe',
            ]; 
}
}
