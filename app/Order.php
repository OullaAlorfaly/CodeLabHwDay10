<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer ::Class) ;
    }

    public function products()
    {
        return $this->belongsToMany(Product::Class, 'orders_products','order_id') ;
    }
}
