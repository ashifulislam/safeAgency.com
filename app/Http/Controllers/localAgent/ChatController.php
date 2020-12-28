<?php

namespace App\Http\Controllers\localAgent;

use App\AgentRequest;
use App\Events\ChatEvent;
use App\Http\Controllers\Controller;
use App\LocalAgent;
use App\Employer;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:localAgent');
    }

    public function chat(){

         $current_agent_id=Auth::user()->id;


        $data['candidates']=  DB::table('candidate_requests')

            ->select('candidates.id','candidates.firstName','candidate_requests.agent_reg_id')

            ->join('candidates','candidate_requests.candidate_id','=','candidates.id')
            ->where(['candidate_requests.agent_reg_id'=>$current_agent_id])
            ->where(['candidate_requests.status'=>'approved'])
            ->get();




         return view('local_agent.localAgentChat',$data);


    }

    public function chatWithCandidate(){
//
        $current_agent_id=Auth::user()->id;
//
//        dd(AgentRequest::select('status')->where('agent_reg_id', '=',$current_agent_id)
//            ->where('status','=','approved')
//
//            ->get());

        $data['candidates']=  DB::table('candidate_requests')

            ->select('candidates.id','candidates.firstName','candidate_requests.agent_reg_id')

            ->join('candidates','candidate_requests.candidate_id','=','candidates.id')
            ->where(['candidate_requests.agent_reg_id'=>$current_agent_id])
            ->where(['status'=>'approved'])
            ->get();




        return view('local_agent.localAgentChatWithCandidate',$data);


    }

//
    public function send(Request $request){

        $user=Auth::user()->name;
        event(new ChatEvent($request->message,$user));
    }

}
