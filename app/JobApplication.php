<?php

namespace App;

use App\Http\Controllers\Employer\jobPostController;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
      'salary','interest','candidateId','jobPostId','status'

    ];
    public function candidate(){
        return $this->belongsTo(Candidate::class,'candidateId');

    }

    public function jobPost(){
        return $this->belongsTo(JobPost::class,'jobPostId');

    }

}
