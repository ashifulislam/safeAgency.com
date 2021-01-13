<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisaApply extends Model
{
    protected $fillable = ['name','email','date_of_birth','passport_no','nationality'
    ,'state','zip','company_name','company_country'];
}
