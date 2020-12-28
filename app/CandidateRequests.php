<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateRequests extends Model
{

        protected $fillable=[
            'status','agent_reg_id','candidate_id'
        ];
}
