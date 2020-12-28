<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function customerRegistration(){
        return $this->belongsTo(CustomerRegistration::class,'customer_reg_id');
    }
}
