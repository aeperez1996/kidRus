<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected  $fillable = [
        'client_id',
        'user_id',
        'Venta_date',
        'tax',
        'status',
        'total',];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
        }
        public function client(){
            return $this->belongsTo(Client::class);
            }
        public function ventaDetails(){
            return $this->hasMany(ventaDetails::class);
            }
            
}
