<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaDetail extends Model
{
    protected  $fillable = [
    'Venta_id',
    'product_id',
    'quantity',
    'price',
    ];
    use HasFactory;



        public function product(){
            return $this->belongsTo(Product::class);
            }
}
