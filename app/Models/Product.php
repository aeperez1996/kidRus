<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sell_price',
        'stock',
        'image',
        'desctiption',
        'Sku',
        
        'category_id',
    ];

  
public function category(){
    return $this->belongsTo(Category::class);
    
}
public function tag(){
    return $this->hasMany(Tag::class);
    }
}
