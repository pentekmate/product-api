<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->hasMany(OrderItem::class); // Egy rendelésnek több rendelési tétel tartozhat
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
