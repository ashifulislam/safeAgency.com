<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManageService extends Model
{
    protected $fillable = [
        'service_description', 'demand','agent_reg_id', 'service_type_id',
    ];
}
