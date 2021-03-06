<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Product(){
        return $this->belongsToMany(Product::class)->withPivot('total_price', 'amount');
    }
}
