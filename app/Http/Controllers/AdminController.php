<?php

namespace App\Http\Controllers;

use App\Employer;
use App\JobPost;
use App\LocalAgent;
use App\Notifications\NewPostNotify;
use App\Subscriber;
use GuzzleHttp\Psr7\LazyOpenStream;
use Illuminate\Http\Request;
use App\Candidate;
use App\JobCategory;
use MongoDB\Driver\Session;
use Notification;

use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Sentinel;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        //To ensure the authentication
        $this->middleware('auth:admin');
    }
    public function adminHome()
    {
        //Getting home view
        return view('admin/adminHome');
    }
    public function showCandidates()
    {
        //To demonstrate all candidates
      $showCandidates=Candidate::all();


        return view('admin/showCandidates',['showCandidates'=>$showCandidates]);

    }
    public function showEmployers()
    {
        //To demonstrate all employers
      $showEmployers=Employer::all();


        return view('admin/showEmployers',['showEmployers'=>$showEmployers]);

    }
    public function showSingleInfo($id)
    {
        //Fetching only single information
        $showCandidate=Candidate::find($id);
        return view('admin/viewSingleInfo',['viewSingleInfo'=>$showCandidate]);
    }
    public function showSingleInfoOfEmployer($id)
    {
        //Fetching only single information
        $showEmployer=Employer::find($id);
        return view('admin/viewSingleInfoOfEmployer',['viewSingleInfoOfEmployer'=>$showEmployer]);
    }


    public function showPendingPosts()
    {
        //To demonstrate pending posts
        $data['pendingPosts'] = JobPost::where('status','pending')->with('employer')->orderBy('id','DESC')->get();
        return view('admin.pendingJobPosts',$data);
    }
    public function showApprovedPosts()
    {
        //To demonstrate approved posts
        $data['pendingPosts'] = JobPost::where('status','approved')->with('employer')->orderBy('id','DESC')->get();

        return view('admin.approveJobPosts',$data);
    }
    public function updatePendingPostStatus(Request $request, $id)
    {
        //To update status
        $jobPost = JobPost::findOrFail($id);
        $jobPost->status = $request->input('status');
        $jobPost->save();
       $subscriber=Subscriber::all();

       foreach($subscriber as $subscriber) {


           Notification::route('mail', $subscriber->email)->notify(new NewPostNotify($jobPost));


       }
        return redirect()->back();

    }
    public function deletePostStatus($id)
    {
        //To delete specific post status
        JobPost::destroy($id);
        return redirect()->back();

    }
    public function showAgentRegReq()
    {
        //To overview of agent reg requests
       if(session('success')){
           Alert::success('Success',session('success'));
       }
       else if(session('success_reject')){
           Alert::error('Success',session('success_reject'));
       }
        //get all agent signup information
        $agent_information = DB::table('local_agents')
            ->select('id','name','email','license_number','reg_status')
            ->get();


        return view('admin.agentRegRequests',['agent_information'=>$agent_information]);
    }
    public function approveRegReq(Request $request,$id)
    {
        //To approve registration status

        LocalAgent::where('id',$id)
            ->update(array('reg_status'=>$request->get('status')));
        return redirect()->back()->with('success','Successfully approved');
    }
    public function rejectRegReq($id)
    {
        //To reject registration status
        $delete_agent = LocalAgent::find($id);
        $delete_agent->delete();
       return redirect()->back()->with('success_reject','Successfully rejected');

    }

}



