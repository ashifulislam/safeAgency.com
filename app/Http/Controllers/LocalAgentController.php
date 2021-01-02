<?php

namespace App\Http\Controllers;

use App\AgentRequest;
use App\AgentsProfile;
use App\Candidate;
use App\CandidateRequests;
use App\Employer;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Input\Input;

class LocalAgentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $data = [];

    public function __construct()
    {
        $this->middleware('auth:localAgent');
    }
    public function approvedCandidates()
    {

        $current_agent_id=Auth::user()->id;
        $approvedCandidates=DB::table('candidate_requests')
            ->select(
                'candidates.id','candidates.email','candidate_requests.agent_reg_id','candidates.firstName',
                'candidates.title','candidates.skill_name', 'candidate_requests.candidate_id','candidate_requests.status',
                'package_lists.package_type','orders.payment_status','orders.phone')

            ->join('candidates','candidates.id','=','candidate_requests.candidate_id')
            ->join('package_lists','package_lists.id','=','candidate_requests.package_type_id')
            ->join('orders','candidates.id','=','orders.candidate_id','left outer')
            ->where('candidate_requests.agent_reg_id',$current_agent_id)
            ->where('orders.agent_reg_id',$current_agent_id)
            ->where('candidate_requests.status','=','approved')
            ->orderBy('candidates.id','ASC')
            ->get();

        //get candidate id from above
        //and match to the order table then we can get the payment status of the specific candidate
        return view('local_agent.approvedCandidates',['approvedCandidates'=>$approvedCandidates]);
    }

    public function approveCandidates(Request $request,$current_candidate_id){
        $current_agent_id=Auth::user()->id;

          if(CandidateRequests::all()
              ->where('status','=','approved')
              ->where('agent_reg_id',$current_agent_id)
              ->where('candidate_id',$current_candidate_id)
              ->count()>0
              ){
              return back()->with('error_message','Already approved');
          }
          else{
              CandidateRequests::where('candidate_id',$current_candidate_id)->
              where('agent_reg_id',$current_agent_id)
                  ->update(array('status'=>$request->get('status')));




          }



          return back()->with('success_message','The request is approved');

    }
    public function rejectCandidates(Request $request,$current_candidate_id){
        $current_agent_id=Auth::user()->id;

        if(CandidateRequests::all()
                ->where('status','=','rejected')
                ->where('agent_reg_id',$current_agent_id)
                ->where('candidate_id',$current_candidate_id)
                ->count()>0
        ){
            return back()->with('error_message','Already rejected');
        }
        else{
            CandidateRequests::where('candidate_id',$current_candidate_id)->
            where('agent_reg_id',$current_agent_id)
                ->update(array('status'=>$request->get('status')));
        }



        return back()->with('success_message','The request is rejected');

    }

    public function seeCandidateRequests(){
        $current_agent_id=Auth::user()->id;

        $candidates=DB::table('candidates')
            ->select('candidates.id','candidates.email','candidate_requests.agent_reg_id','candidates.firstName',
            'candidates.title','candidates.skill_name','candidate_requests.candidate_id','candidate_requests.status','package_lists.package_type')
            ->join('candidate_requests','candidates.id','=','candidate_requests.candidate_id')
            ->join('package_lists','package_lists.id','=','candidate_requests.package_type_id')

            ->where('candidate_requests.agent_reg_id',$current_agent_id)

            ->get();

                if(session('success_message')){
                Alert::success('Success',session('success_message'))->autoClose(3000);
            }
        else if(session('error_message')){
            Alert::error('Error',session('error_message'))->autoClose(3000);
        }

         return view('local_agent.candidateRequestLists',['candidates'=>$candidates]);

     }
    public function seeEmployers(){
        $employer=Employer::all();

        if(session('success_message')){

            Alert::success('Success', session('success_message'))->autoClose(3000);

        }
        else if(session('error_message')){
            Alert::error('Error', session('error_message'))->autoClose(3000);


        }

        return view('local_agent.seeEmployerList')->with(['employer'=>$employer]);

    }
    public function seeRequests(){

          $current_agent_id=Auth::user()->id;

          $data['employers']=  DB::table('employers')

            ->select('employers.firstName','employers.email','employers.companyName','employers.companyCountry','agent_requests.status','agent_requests.emp_id')

            ->join('agent_requests', 'agent_requests.emp_id', '=', 'employers.id')



           ->where(['agent_requests.agent_reg_id'=>$current_agent_id])
            ->get();


            return view('local_agent.requestLists',$data);

    }
    public function sendRequestToEmployer(Request $request,$emp_id){



        $id = Auth::user()->id;


        if( AgentRequest::where('agent_reg_id', '=',$id)
            ->where('emp_id','=',$emp_id)
            ->count()>0
          ){
            return redirect()->back()->with('error_message','Request already sent');


        }
        else{
            //Requests does not exists
            $agentReq = new AgentRequest();
            $agentReq->status  = $request->get('status');
            $agentReq->agent_reg_id = $id;
            $agentReq->emp_id=$emp_id;

            $agentReq->save();



            return redirect()->back()->with('success_message','The request is sent');

        }






    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return view('local_agent.local_agent_home');
        $current_agent_id=Auth::user()->id;
        $data['agents']=AgentsProfile::select('photo')->where('agent_reg_id',$current_agent_id)->get();

        return view('home',$data);
    }
}
