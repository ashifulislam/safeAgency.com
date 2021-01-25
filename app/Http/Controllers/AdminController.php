<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth:admin');
    }
    public function adminHome(){
        return view('admin/adminHome');
    }
    public function showCandidates()
    {
        //
      $showCandidates=Candidate::all();


        return view('admin/showCandidates',['showCandidates'=>$showCandidates]);

    }
    public function showSingleInfo($id){
        $showCandidate=Candidate::find($id);
        return view('admin/viewSingleInfo',['viewSingleInfo'=>$showCandidate]);
    }


    public function showPendingPosts(){
        $data['pendingPosts'] = JobPost::where('status','pending')->with('employer')->orderBy('id','DESC')->get();
        return view('admin.pendingJobPosts',$data);
    }
    public function showApprovedPosts(){
        $data['pendingPosts'] = JobPost::where('status','approved')->with('employer')->orderBy('id','DESC')->get();

        return view('admin.approveJobPosts',$data);
    }
    public function updatePendingPostStatus(Request $request, $id){
       // dd($request->all());
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
        JobPost::destroy($id);
        return redirect()->back();

    }
    public function showAgentRegReq()
    {
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

        LocalAgent::where('id',$id)
            ->update(array('reg_status'=>$request->get('status')));
        return redirect()->back()->with('success','Successfully approved');
    }
    public function rejectRegReq($id)
    {
        $delete_agent = LocalAgent::find($id);
        $delete_agent->delete();
       return redirect()->back()->with('success_reject','Successfully rejected');

    }

}



