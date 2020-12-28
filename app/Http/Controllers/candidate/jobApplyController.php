<?php

namespace App\Http\Controllers\candidate;

use App\Http\Controllers\Controller;
use App\JobApplication;
use Illuminate\Http\Request;
use Auth;

class jobApplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:candidate');
    }
    public function jobApplied(Request $request){


        $this->validate($request,[
            'salary'=>'required',
            'interest'=>'required',
        ]);

        $current_candidate_id=Auth::user()->id;
        $current_job_post_id=$request->input('jobPostId');

        if(JobApplication::
        where('jobPostId','=',$current_job_post_id)
            ->where('candidateId','=',$current_candidate_id)
            ->count()>0){
            return redirect()->back()->with('error_message','Already applied');;
        }

        else{

            $applyJob=new JobApplication();

            $applyJob->salary=$request->input('salary');
            $applyJob->interest=$request->input('interest');
            $applyJob->jobPostId = $request->input('jobPostId');
            $applyJob->candidateId =$current_candidate_id;
            $applyJob->status ='pending';

            $applyJob->save();
            return redirect()->route('application.confirm')->with('success_message','Successfully applied');;
        }




        }
        public function showConfirmation(){

        }

}
