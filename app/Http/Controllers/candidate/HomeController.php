<?php

namespace App\Http\Controllers\candidate;

use App\AgentsProfile;
use App\Candidate;
use App\Http\Controllers\Controller;
use App\JobCategory;
use App\JobPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
public function showHome(){
    $data['agent_profiles']=AgentsProfile::all();

    $data['categories']=JobCategory::with(['jobPosts' => function($q){
        $q->where('status', '=', 'approved');
    }])->get();

    $data['jobPosts']=JobPost::where('status','approved')->get();
    $data['recentJobs']=JobPost::where('status','approved')->with(['employer','jobCategory'])->orderBy('id','DESC')->limit(3)->get();
    $data['fullTimeJobs']=JobPost::where('status','approved')->with(['employer','jobCategory'])->where('employmentStatus','FullTime')->orderBy('id','DESC')->limit(3)->get();
    $data['partTimeJobs']=JobPost::where('status','approved')->with(['employer','jobCategory'])->where('employmentStatus','PartTime')->orderBy('id','DESC')->limit(3)->get();
   // dd( $data['partTimeJobs'])
    return view('employer.home',$data);
}
public function categoryWiseJobPosts($id){
    $data['jobPosts']=JobPost::with(['employer','jobCategory'])->where('status','=','approved')->where('categoryTypeId',$id)->orderBy('id','DESC')->get();

    return view('candidate.candidate',$data);
}
public  function showJobDetails($id){
    $data['singleJobPost'] = JobPost::findOrFail($id);
    return view('candidate.singleJob',$data);
}
public function searchjob(Request $request){
    if($request->searchKeyword == null && $request->categoryTypeId == null && $request->location == null){
        return redirect()->back()->withErrors(['You must seleect atleast one search criteria']);
    }
    if($request->searchKeyword != null){
        $data['jobPosts']=JobPost::with(['employer','jobCategory'])->Where('categoryTypeId','like','%'.$request->searchKeyword.'%')->orWhere('location','like','%'.$request->searchKeyword.'%')->orderBy('id','DESC')->get();
        // dd($data['jobPosts']);
        return view('candidate.searchResult',$data);
    }
        $data['jobPosts']=JobPost::with(['employer','jobCategory'])->where('status','=','approved')->Where('categoryTypeId',$request->categoryTypeId)->orWhere('location',$request->location)->orderBy('id','DESC')->get();
   // dd($data['jobPosts']);
    return view('candidate.searchResult',$data);
}

//public function jobApplication($id){
//    $jobPosts['jobPosts']=JobPost::with('employer')->find($id);
//
//    return view('candidate.jobApplicationForm',$jobPosts);
//}
}
