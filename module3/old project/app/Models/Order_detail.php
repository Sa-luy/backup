<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    public function oders(){
        return $this->belongsTo(Oders::class ,'order_id','id');
    }
    public function products(){
        return $this->belongsTo(Products::class ,'product_id','id');
    }
}