<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
  protected $fillable=['categoryName','categoryType','employerId'];

 public function employer(){
     return $this->belongsTo(Employer::class);
 }

  public function jobPosts(){
     return $this->hasMany(JobPost::class,'categoryTypeId');
  }
}
