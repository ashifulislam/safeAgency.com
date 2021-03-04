<?php

namespace App\Http\Controllers;

use App\AgentRequest;
use App\Events\ChatEvent;
use App\JobApplication;
use App\JobPost;
use Illuminate\Http\Request;
use App\Employer;
use App\JobCategory;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Sentinel;
use Auth;

class EmployerController extends Controller
{

    public function chat()
    {
        //To view chat page

        return view('employer.liveChat');

    }


    public function send(Request $request)
    {
        //To send the message

        $user = Auth::user()->firstName;
        event(new ChatEvent($request->message,$user));

    }
    public function approveRequest(Request $request,$id)
    {
        //To approve requests
        $current_employer_id=Auth::user()->id;
         AgentRequest::where('agent_reg_id', $id)->
           where('emp_id',$current_employer_id)
           ->update(array('status' => $request->get('status')));

        return redirect()->back()->with('success_message','The request is approved');

    }
 public function rejectRequest(Request $request,$id)
 {

        //To reject requests
        $current_employer_id=Auth::user()->id;
         AgentRequest::where('agent_reg_id', $id)->
           where('emp_id',$current_employer_id)
           ->update(array('status' => $request->get('status')));

        return redirect()->back()->with('success_message','The request is rejected');

    }


    public function createJobCategory(Request $request)
    {
        //To create job category

        if(session('success_message')){
            Alert::success('Success', session('success_message'))->autoClose(3000);

        }

        return view('employer/jobCategory')->with('email',$request->session()->get('user'));
    }
    public function createJobPost(Request $request)
    {
        //To create job post
        return view('employer/employerJobPost');
    }
    public function addJobCategory(Request $request)
    {
        //To add job category
        $rules=[
            'categoryName'=>['required'],
            'categoryType'=>['required'],
            'myCheck'=>['required'],

        ];
        $request->validate($rules);


        $emp_id=Auth::user()->id;
        $addJobCategory=new JobCategory();
        $addJobCategory->categoryName=$request->input('categoryName');
        $addJobCategory->categoryType=$request->input('categoryType');
        $addJobCategory->employerId=$emp_id;
        $addJobCategory->save();
        return redirect('/jobCategory')->with('success_message','The category is added');
        }

    public function showEmployerList()
    {
        //To show all employers
        if(session('success'))
        {
            Alert::success('Success',session('success'));
        }

        $user_id = Auth::user()->id;
        $data['data'] = DB::table('employers')->where('id' ,'=', $user_id)->get();
        if(count ($data)>0){
            return view('employer/show')->with('showEmployer',$data['data']);        }

    }


    public function updateEmployer($id)
    {
        //To update employers

         $addJobCategory = Employer::find($id);
         return view('employer/updateEmployerProfile',['updateEmployerProfile'=>$addJobCategory]);

    }
    public function editEmployer(Request $request,$id)
    {
        //To edit employers
        $this->validate($request,[
            'FirstName'=>'required',
            'LastName'=>'required',
            'CompanyName'=>'required',
            'CompanyDetails'=>'required',
            'CompanyCountry'=>'required',
            'CompanyState'=>'required',
            'CompanyZipCode'=>'required',
            'myCheck'=>'required'

        ]);


        $update=array('firstName'=>$request->input('FirstName'),'lastName'=>$request->input('LastName'),'companyName'=>$request->input('CompanyName'),
                     'companyDetails'=>$request->input('CompanyDetails'),
                     'companyCountry'=>$request->input('CompanyCountry'),
                     'companyState'=>$request->input('CompanyState'),
                     'companyZipCode'=>$request->input('CompanyZipCode'));
        $updateEmployer=Employer::where('id',$id);
        $updateEmployer->update($update);
        return redirect('/show')->with('success','Profile Updated Successfully');

    }
    public function deleteEmployer($id)
    {
       //To delete employer
        $delete=Employer::where('id',$id);
        $delete->delete();
        return redirect('/show')->with('DeleteSuccess','Deleted Successfully');
    }


    public function showSingleInfo($id)
    {
        //To get only single information
        $showEmployer=Employer::find($id);
       return view('employer/viewSingleInfo',['viewSingleInfo'=>$showEmployer]);
    }

    public function __construct()
    {
        //Ensure the authentication
        $this->middleware('auth:employer');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employer/admin_home');
    }
    public function showPendingAgentRequest()
    {
        //To show all pending requests here

        $current_employer_id=Auth::user()->id;
        $data = [];

            $data['agents']=  DB::table('local_agents')

                ->select('agents_profiles.bio','agents_profiles.agent_reg_id','agents_profiles.photo','agents_profiles.about','agents_profiles.interest','agents_profiles.skill','local_agents.name','local_agents.email','agents_profiles.age','local_agents.phone','agent_requests.status')

                ->join('agents_profiles','agents_profiles.agent_reg_id','=','local_agents.id')
                ->join('agent_requests', 'agent_requests.agent_reg_id', '=', 'local_agents.id')
                ->where(['agent_requests.emp_id'=>$current_employer_id])
                ->get();

        if(session('success_message')){
            Alert::success('Success', session('success_message'))->autoClose(3000);

        }
        return view('employer.pendingAgentRequest',$data);

    }

    public function showPendingJobApplication(){
        //current employer and emp_id of the specific job post then get the data
        //specific job post id and employer of this specific job post id
          $current_employer_id=Auth::user()->id;
            $data['pendingPosts']=DB::table('job_applications')
            ->select('job_applications.id','candidates.firstName','candidates.email','candidates.skill_name'
            ,'candidates.softSkills','job_applications.interest','job_applications.salary','job_posts.employerId')
            ->join('candidates','candidates.id','=','job_applications.candidateId')
            ->join('job_posts','job_posts.id','job_applications.jobPostId')
            ->where('job_applications.status','=','pending')
            ->where('job_posts.employerId',$current_employer_id)
            ->get();
            if(session('success_message')){
                Alert::success('Success',session('success_message'))->autoClose(3000);
            }

        return view('employer.pendingJobApplication',$data);
    }
    public function updatePendingJobApplicationStatus(Request $request, $id)
    {
      //To update pending job application status
        $jobApplication = JobApplication::findOrFail($id);
        $jobApplication->status = $request->input('status');
        $jobApplication->save();

        return redirect()->back()->with('success_message','Application is approved successfully');
    }
}
