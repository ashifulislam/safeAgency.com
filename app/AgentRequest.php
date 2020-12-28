<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentRequest extends Model
{
    protected $fillable = [
        'status','agent_reg_id'    ];

    public function employer(){
        return $this->belongsTo(Employer::class,'emp_id');
    }
}
