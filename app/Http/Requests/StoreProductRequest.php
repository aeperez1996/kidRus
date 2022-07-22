<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
        'name'=>'string|required|unique:products|max:255',
        'sell_price'=>'requered',
        'image'=>'required|dimensions:min_width=100,min_height=200',
        'Sku'=>'interger|required|exists:App\Product,Sku',
        'category_id'=>'interger|required|exists:App\Category,id',
       
     ];    }
     public function messages()
    {
        return[
        'name.required'=>'Este campo es requerido.',
        'name.string'=>'el valor no es correcto.',
        'name.max'=>'solo se permite 255 caracteres.',

        'image.requered'=>'El campo es requerido',
        'image.dimensions'=>'Solo se permiten imagenes de 100x200px',

        'sell_price.requered'=>'El campo es requerido',

        
        'Sku.interger'=>'El valor tien que ser entero',
        'Sku.requered'=>'El campo es requerido',
        'Sku.exists'=>'El Sku no existe',

        'category_id.interger'=>'El valor tien que ser entero',
        'category_id.requered'=>'El campo es requerido',
        'category_id.exists'=>'La categoria no existe',
        ];
    }

}