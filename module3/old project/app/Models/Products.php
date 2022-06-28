<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function order_detail()
    {
        return $this->hasOne(Order_detail::class, 'product_id', 'id');
    }
}