<?php

namespace App\Http\Controllers;

use App\AgentsProfile;
use App\Events\ChatEvent;
use App\JobApplication;
use App\JobPost;
use Illuminate\Http\Request;
use App\Candidate;
use App\JobCategory;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Sentinel;
use Auth;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:candidate')->except('showAllAgent', 'showPackageList', 'showPartialPackageList');
    }

    public function chat()
    {

        return view('candidate.liveChat');

    }

    public function send(Request $request)
    {

        $user = Auth::user()->firstName;
        event(new ChatEvent($request->message, $user));

    }

    public function showPartialPackageList($agent_id)
    {

        if (session('success_message')) {

            Alert::success('Success', session('success_message'))->autoClose(4000);

        } else if (session('error_message')) {
            Alert::error('Error', session('error_message'))->autoClose(4000);
        } else if (session('not_approved')) {

            Alert::error('Error', session('not_approved'))->autoClose(4000);

        }

        $services = DB::table('service_types')
            ->select('service_types.service_title', 'service_types.service_type', 'manage_services.service_description', 'manage_services.demand', 'manage_services.agent_reg_id', 'package_lists.package_type')
            ->join('manage_services', 'service_types.id', '=', 'manage_services.service_type_id')
            ->join('package_lists', 'package_lists.id', '=', 'manage_services.package_type_id')
            ->where(['service_types.agent_reg_id' => $agent_id])
            ->where(['package_lists.package_type' => 'partial package'])
            ->get();

        //Getting demands
        $demand = DB::table('package_lists')
            ->select('demand')
            ->join('manage_services', 'package_lists.id', '=', 'manage_services.package_type_id')
            ->where(['manage_services.agent_reg_id' => $agent_id])
            ->where(['package_lists.package_type' => 'partial package'])
            ->get();

        $total_amount = 0;
        //Calculate demands
        foreach ($demand as $singleDemand) {
            $total_amount = $total_amount + $singleDemand->demand;
        }


        $packageTypeId = DB::table('package_lists')
            ->select('manage_services.package_type_id', 'package_lists.package_type')
            ->join('manage_services', 'package_lists.id', '=', 'manage_services.package_type_id')
            ->where('manage_services.agent_reg_id', $agent_id)
            ->where('package_lists.package_type', '=', 'partial package')
            ->first();
        return view('candidate.partialPackageList', ['services' => $services], ['demands' => $total_amount])->with('agent_id', $agent_id)->with(['packageTypeId' => $packageTypeId]);
    }

    public function showPackageList($agent_id)
    {
        if (session('success_message')) {

            Alert::success('Success', session('success_message'))->autoClose(4000);

        } else if (session('error_message')) {
            Alert::error('Error', session('error_message'))->autoClose(4000);
        } else if (session('not_approved')) {

            Alert::error('Error', session('not_approved'))->autoClose(4000);

        }

        //Getting services based on package
        $services = DB::table('service_types')
            ->select('service_types.service_title', 'service_types.service_type', 'manage_services.service_description', 'manage_services.demand', 'manage_services.agent_reg_id', 'package_lists.package_type')
            ->join('manage_services', 'service_types.id', '=', 'manage_services.service_type_id')
            ->join('package_lists', 'package_lists.id', '=', 'manage_services.package_type_id')
            ->where(['service_types.agent_reg_id' => $agent_id])
            ->where(['package_lists.package_type' => 'complete package'])
            ->get();

        //getting the package_type_id
        $packageTypeId = DB::table('package_lists')
            ->select('manage_services.package_type_id', 'package_lists.package_type')
            ->join('manage_services', 'package_lists.id', '=', 'manage_services.package_type_id')
            ->where('manage_services.agent_reg_id', $agent_id)
            ->where('package_lists.package_type', '=', 'complete package')
            ->first();


        //Getting demands
        $demand = DB::table('package_lists')
            ->select('demand')
            ->join('manage_services', 'package_lists.id', '=', 'manage_services.package_type_id')
            ->where(['manage_services.agent_reg_id' => $agent_id])
            ->where(['package_lists.package_type' => 'complete package'])
            ->get();

        $total_amount = 0;
        //Calculate demands
        foreach ($demand as $singleDemand) {
            $total_amount = $total_amount + $singleDemand->demand;
        }


        return view('candidate.packageList', ['services' => $services], ['demands' => $total_amount])
            ->with('agent_id', $agent_id)
            ->with(['packageTypeId' => $packageTypeId]);

    }

    public function showAllAgent($agent_id)
    {


        $data['agents'] = DB::table('local_agents')
            ->select('agents_profiles.bio', 'agents_profiles.agent_reg_id', 'agents_profiles.photo', 'agents_profiles.about', 'agents_profiles.interest', 'agents_profiles.skill', 'local_agents.name', 'local_agents.email', 'agents_profiles.age', 'local_agents.phone')
            ->join('agents_profiles', 'agents_profiles.agent_reg_id', '=', 'local_agents.id')
            ->where(['local_agents.id' => $agent_id])
            ->get();


        return view('candidate.showAllAgentProfile', $data);
    }

    public function candidateHome()
    {
        return view('candidate/candidateHome');
    }


    public function showCandidate()
    {
        //
        $user_id = Auth::user()->id;
        $data['data'] = DB::table('candidates')->where('id', '=', $user_id)->get();
        if (count($data) > 0) {


            return view('candidate/viewYourProfile')->with('showCandidate', $data['data']);
        }
    }

    public function showCandidateForUpdate()
    {
        //
        $user_id = Auth::user()->id;
        $data['data'] = DB::table('candidates')->where('id', '=', $user_id)->get();
        if (count($data) > 0) {


            return view('candidate/show')->with('showCandidate', $data['data']);
        }
    }

    public function updateCandidate($id)
    {

        $returnValue = Candidate::find($id);
        return view('candidate/updateCandidateProfile', ['updateCandidateProfile' => $returnValue]);

    }

    public function editCandidate(Request $request, $id)
    {

        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'institute' => 'required',
            'org' => 'required',
            'address' => 'required',
            'softSkills' => 'required',
            'skill_name' => 'required',
            'myCheck' => 'required'

        ]);

        $update = array('firstName' => $request->input('firstName'), 'lastName' => $request->input('lastName'), 'email' => $request->input('email'),
            'degree' => $request->input('degreeType'),
            'institute' => $request->input('institute'),
            'title' => $request->input('jobTitle'),
            'org' => $request->input('org'),
            'address' => $request->input('address'),
            'softSkills' => $request->input('softSkills'),
            'skill_name' => $request->input('softSkills')
        );
        $updateCandidate = Candidate::where('id', $id);
        $updateCandidate->update($update);
        return redirect('/showForUpdate')->with('success', 'Updated Successfully');

    }

    public function deleteCandidate($id)
    {
        $delete = Candidate::where('id', $id);
        $delete->delete();
        return redirect('/showForUpdate')->with('DeleteSuccess', 'Deleted Successfully');
    }

    public function showApplicationForm()
    {
        return view('candidate/jobApplicationForm');
    }

    public function jobApplication($id)
    {
        $jobPosts['jobPosts'] = JobPost::with('employer')->find($id);
        if (session('error_message')) {

            Alert::error('error', session('error_message'))->autoClose(3000);

        }
        return view('candidate.jobApplicationForm', $jobPosts);
    }


    public function jobConfirmation()
    {

        $user_id = Auth::user()->id;

        $jobPosts['appliedJobs'] = JobApplication::where('candidateId', $user_id)->with(['jobPost' => function ($query) {
            return $query->with(['employer', 'jobCategory']);
        }])->orderBy('id', 'DESC')->get();

        if (session('success_message'))
        {
            Alert::success('Success', session('success_message'))->autoClose(3000);

        }

        return view('candidate.seeAppliedJobs', $jobPosts);
    }

    public function service_detail()
    {

        $current_candidate = Auth::user()->id;

        $agent_info = DB::table('local_agents')
            ->select('candidate_requests.candidate_id', 'local_agents.email', 'candidate_requests.status', 'local_agents.name', 'agents_profiles.skill',
                'candidate_requests.package_type_id', 'package_lists.package_type', 'visa_applies.application_status', 'orders.payment_status')
            ->join('agents_profiles', 'local_agents.id', '=', 'agents_profiles.agent_reg_id')
            ->join('candidate_requests', 'local_agents.id', 'candidate_requests.agent_reg_id')
            ->join('orders', 'local_agents.id', '=', 'orders.agent_reg_id')
            ->join('package_lists', 'package_lists.id', '=', 'candidate_requests.package_type_id')
            ->join('visa_applies', 'visa_applies.agent_id', '=', 'local_agents.id')
            ->where('candidate_requests.candidate_id', $current_candidate)
            ->where('orders.payment_status', '=', 'Successful')
            ->where('visa_applies.candidate_id', $current_candidate)
            ->distinct()
            ->get();


        return view('candidate.service_detail', ['agent_info' => $agent_info]);


        //return view('candidate.service_detail');
    }

    public function print_visa()
    {
        $current_candidate_id = Auth::user()->id;
        //getting job post id
        $job_post_id = DB::table('visa_applies')

            ->select('visa_applies.job_post_id','visa_applies.candidate_id','visa_applies.agent_id')
            ->where('visa_applies.candidate_id',$current_candidate_id)
            ->first();

        //getting the employer id
        $employer_id = DB::table('job_posts')

            ->select('job_posts.employerId')
            ->where('job_posts.id',$job_post_id->job_post_id)
            ->first();

        $employer_info = DB::table('employers')

            ->select('employers.firstName','employers.email','employers.companyName','employers.companyCountry'
            ,'employers.companyState','employers.companyZipCode')
            ->where('employers.id',$employer_id->employerId)
            ->first();

        $order_details = DB::table('orders')
            ->select('orders.amount','orders.transaction_id','orders.currency')
            ->where('orders.candidate_id',$current_candidate_id)
            ->first();

        $candidate_name = Auth::user()->firstName;

        $package_type_id = DB::table('candidate_requests')
            ->select('candidate_requests.package_type_id')
            ->where('candidate_requests.candidate_id',$current_candidate_id)
            ->where('candidate_requests.agent_reg_id',$job_post_id->agent_id)
            ->value('package_type_id');

        $package_type = DB::table('package_lists')
            ->select('package_type')
            ->where('id',$package_type_id)
            ->first();



       return view('candidate.print_visa')
           ->with('employer_info',$employer_info)
           ->with('candidate_name',$candidate_name)
           ->with('order_details',$order_details)
           ->with('package_type',$package_type);

    }
}



