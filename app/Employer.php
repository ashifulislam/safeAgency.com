<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employer extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'email', 'password','companyName','companyDetails','companyCountry',
        'companyState','companyZipCode',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jobCategories(){
        return $this->hasMany(JobCategory::class);
    }

    public function jobPosts(){
        return $this->hasMany(JobPost::class);
    }
    public function approveRequests(){
        return $this->hasMany(AgentRequest::class,'emp_id');
    }

}
