<?php

namespace App;

use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    //
    protected $fillable = [
        'responsibility','jobPosition', 'vacancy', 'degreeType','employmentStatus','categoryTypeId','location',
        'salary','experience','deadLine','employerId',

    ];


    public function jobCategory(){
        return $this->belongsTo(JobCategory::class,'categoryTypeId');
    }
    public function employer(){
        return $this->belongsTo(Employer::class,'employerId');
    }
    public function JobApplication(){
        $this->hasMany(JobApplication::class);
    }
}
