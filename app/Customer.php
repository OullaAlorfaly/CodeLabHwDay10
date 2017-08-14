<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function getFullNameAttribute()
    {
        return $this->first_name ." ". $this->last_name;
    }

    public function orders()
    {
        return $this->hasMany(Order::Class,'customer_id', 'id');
    }

}
