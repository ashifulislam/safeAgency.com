<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jobPostController extends Controller
{
    public function showPrimaryJobInfo(){
        return view('employer/primaryJobInfo');
    }
    public function showAdditionalInfo(){
        return view('employer/additionalJobInfo');
    }
    public function showCandidateInfo(){
        return view('employer/candidateJobInfo');
    }
}
