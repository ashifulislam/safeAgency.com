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
        //Ensure the authentication
        $this->middleware('auth:localAgent');
    }
    public function approvedCandidates()
    {
        //Getting all approved candidates

        $current_agent_id=Auth::user()->id;
        $approvedCandidates=DB::table('candidate_requests')
            ->select(
                'candidates.id','candidates.email','candidate_requests.agent_reg_id','candidates.firstName',
                'candidates.title','candidates.skill_name', 'candidate_requests.candidate_id','candidate_requests.status',
                'package_lists.package_type','orders.payment_status','orders.phone')

            ->join('candidates','candidates.id','=','candidate_requests.candidate_id')
            ->join('package_lists','package_lists.id','=','candidate_requests.package_type_id')
            ->leftJoin('orders','candidates.id','=','orders.candidate_id')
            ->where('candidate_requests.agent_reg_id',$current_agent_id)
            ->where('candidate_requests.status','=','approved')
            ->orderBy('candidates.id','ASC')
            ->get();



        //get candidate id from above
        //and match to the order table then we can get the payment status of the specific candidate
        return view('local_agent.approvedCandidates',['approvedCandidates'=>$approvedCandidates]);
    }

    public function approveCandidates(Request $request,$current_candidate_id)
    {
        //To approve candidate requests
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
    public function rejectCandidates(Request $request,$current_candidate_id)
    {
        //To reject candidates
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

    public function seeCandidateRequests()
    {
        //To demonstrate candidate requests
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
    public function seeEmployers()
    {
        //To demonstrate all employers
        $employer=Employer::all();

        if(session('success_message')){

            Alert::success('Success', session('success_message'))->autoClose(3000);

        }
        else if(session('error_message')){
            Alert::error('Error', session('error_message'))->autoClose(3000);


        }

        return view('local_agent.seeEmployerList')->with(['employer'=>$employer]);

    }
    public function seeRequests()
    {
        //To demonstrate employer requests

          $current_agent_id=Auth::user()->id;

          $data['employers']=  DB::table('employers')

            ->select('employers.firstName','employers.email','employers.companyName','employers.companyCountry','agent_requests.status','agent_requests.emp_id')

            ->join('agent_requests', 'agent_requests.emp_id', '=', 'employers.id')



           ->where(['agent_requests.agent_reg_id'=>$current_agent_id])
            ->get();


            return view('local_agent.requestLists',$data);

    }
    public function sendRequestToEmployer(Request $request,$emp_id)
    {

        //Sending request to specific employer
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
        $current_agent_id=Auth::user()->id;
        $data['agents']=AgentsProfile::select('photo')->where('agent_reg_id',$current_agent_id)->get();

        return view('home',$data);
    }
    public function requiredTasks()
    {
        //Getting all required tasks

        if(session('error_message')){
            Alert::error('Error',session('error_message'))->autoClose(3000);
        }
        else if(session('error_job_post'))
        {
            Alert::error('Error',session('error_job_post'));
        }
      //getting package_type
        $current_agent_id = Auth::user()->id;
        $candidate_details=DB::table('candidates')

            ->select('package_lists.package_type','candidates.email','candidates.id','candidates.firstName','candidate_requests.package_type_id','candidate_requests.agent_reg_id',
            'manage_services.service_description','orders.payment_status'
            ,'service_types.service_type')
            ->join('candidate_requests','candidates.id','=','candidate_requests.candidate_id')
            ->join('package_lists','package_lists.id','=','candidate_requests.package_type_id')
            ->join('manage_services','manage_services.package_type_id','=','package_lists.id')
            ->join('orders','candidates.id','=','orders.candidate_id')
            ->join('service_types','service_types.id','=','manage_services.service_type_id')
            ->where('orders.payment_status','=','Successful')
            ->where('candidate_requests.agent_reg_id',$current_agent_id)
            ->where('candidate_requests.status','=','approved')

            ->get();


       return view('local_agent.requiredTasks',['candidate_details'=>$candidate_details]);
    }

    public function visa_application($candidate_name,$candidate_email,$candidate_id)
    {
        //Application form with proper information
        if(session('success_message'))
        {
            Alert::success('Success',session('success_message'))->autoClose(3000);
        }
        else if(session('error_message'))
        {
            Alert::error('Error',session('error_message'))->autoClose(3000);
        }

        //agent is responsible for only one job post
        $job_post_id = DB::table('job_applications')

            ->select('job_applications.jobPostId','job_applications.status')
            ->where('job_applications.candidateId',$candidate_id)
            ->orderBy('created_at','desc')
            ->first();
        if($job_post_id !=null)
        {
            if($job_post_id->status === 'pending')
            {

                return redirect()->back()->with('error_message','Job approval is not approved');

            }
            else
            {
                $employer_id = DB::table('job_posts')

                    ->select('job_posts.employerId')
                    ->where('job_posts.id',$job_post_id->jobPostId)
                    ->get();

                foreach($employer_id as $employer_id){
                    $employer_id=$employer_id->employerId;
                }

                $employer_information = DB::table('employers')
                    ->select('employers.firstName','employers.email','employers.companyName','employers.companyCountry')
                    ->where('employers.id',$employer_id)
                    ->get();
                //getting the position applied for
                $job_position = DB::table('job_posts')

                    ->select('job_posts.jobPosition')
                    ->where('job_posts.id',$job_post_id->jobPostId)
                    ->get();

                //getting country, zip, state
                $current_agent_id = Auth::user()->id;
                $nationality_info = DB::table('orders')
                    ->select('orders.country','orders.state','orders.zip')
                    ->where('orders.agent_reg_id',$current_agent_id)
                    ->where('orders.candidate_id',$candidate_id)
                    ->first();

                return view('local_agent.visa_applications',['employer_information'=>$employer_information],['job_positions'=>$job_position])

                    ->with('candidate_name',$candidate_name)
                    ->with('candidate_email',$candidate_email)
                    ->with('candidate_id',$candidate_id)
                    ->with(['nationality_info'=>$nationality_info])
                    ->with('job_post_id',$job_post_id);
            }

        }
        else
            {
            return redirect()->back()->with('error_job_post','You did not apply for a job');
        }
    }
    public function regStatus()
    {
        //To demonstrate registration status
        $current_agent_id = Auth::user()->id;
        $reg_status = DB::table('local_agents')
            ->select('reg_status')
            ->where('id',$current_agent_id)
            ->get();

        return view('local_agent.regStatus',['reg_status'=>$reg_status]);
    }

    public function providedTasks()
    {

        $current_agent_id = Auth::user()->id;
        //getting provided tasks
        $provided_services = DB::table('visa_applies')

            ->where('agent_id',$current_agent_id)
            ->get();

        return view('local_agent.provided_services',['provided_services'=>$provided_services]);




    }
}
