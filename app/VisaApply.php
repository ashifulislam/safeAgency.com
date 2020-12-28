<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisaApply extends Model
{
    public function localAgent(){
        $this->belongsTo(LocalAgent::class,'agent_id');
    }
}
