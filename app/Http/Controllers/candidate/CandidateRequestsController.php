<?php

namespace App\Http\Controllers\candidate;

use App\CandidateRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class CandidateRequestsController extends Controller
{
    public function __construct(){
        $this->middleware('auth:candidate');
    }
    public function seeRequests()
    {

        $current_candidate = Auth::user()->id;

        $status = DB::table('local_agents')

            ->select('candidate_requests.candidate_id','local_agents.email','candidate_requests.status','local_agents.name','agents_profiles.skill')
            ->join('agents_profiles','local_agents.id','=','agents_profiles.agent_reg_id')
            ->join('candidate_requests','local_agents.id','candidate_requests.agent_reg_id')
            ->where('candidate_requests.candidate_id',$current_candidate)
            ->get();

        return view('candidate.seeAgentRequestsStatus',['status'=>$status]);
    }
    public function sendHireRequest(Request $request,$agent_id,$package_type_id){


        $current_candidate_id=Auth::user()->id;

       if(CandidateRequests::all()->where('agent_reg_id',$agent_id)
            ->where('candidate_id',$current_candidate_id)->count()>0){
           return back()->with('error_message','You already made a request for one package');
       }
       else{

       $candidate_requests=new CandidateRequests();
       $candidate_requests->status=$request->input('status');
       $candidate_requests->agent_reg_id=$agent_id;
       $candidate_requests->candidate_id=$current_candidate_id;
       $candidate_requests->package_type_id=$package_type_id;
       $candidate_requests->save();
       return back()->with('success_message','Request sent successfully');

       }







    }
}
