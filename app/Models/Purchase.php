<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{protected  $fillable = [
    'user_id',
    'purchase_date',
    'tax',
    'picture',
    'status',
    'total',


];
public function user(){
return $this->belongsTo(User::class);
}
public function purchaseDetails(){
    return $this->hasMany(purchaseDetails::class);
    }
    
}
