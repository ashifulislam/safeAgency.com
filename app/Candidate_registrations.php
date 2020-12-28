<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_registrations extends Model
{
    protected $fillable = [
        'name', 'email', 'password'
    ];
}
