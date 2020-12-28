<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function customerRegistration(){
        return $this->belongsTo(Review::class,'customer_reg_id');
    }
}
