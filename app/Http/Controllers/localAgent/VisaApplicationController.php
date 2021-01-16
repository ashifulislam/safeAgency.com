<?php

namespace App\Http\Controllers\localAgent;

use App\Http\Controllers\Controller;
use App\VisaApply;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class VisaApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth:localAgent');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $current_agent_id = Auth::user()->id;
        $rules=
            [

            'candidate_name'=>['required'],
            'candidate_email'=>['required'],
            'candidate_date_of_birth'=>['required'],
            'passport_no'=>['required'],
            'country'=>['required'],
            'state'=>['required'],
            'zip'=>['required'],

        ];
        $request->validate($rules);
        $dob=$request->input('candidate_date_of_birth');
        $age=Carbon::parse($dob)->age;

        $candidate_id=$request->input('candidate_id');

        if(DB::table('visa_applies')
            ->where('visa_applies.agent_id',$current_agent_id)
            ->where('visa_applies.candidate_id',$candidate_id)
            ->count()>0){
            return redirect()->back()->with('error_message','Already applied for this candidate');
        }
        else
            {

            $visa_application = new VisaApply();

            $visa_application->name = $request->input('candidate_name');
            $visa_application->email = $request->input('candidate_email');
            $visa_application->age =$age;
            $visa_application->passport_no = $request->input('passport_no');
            $visa_application->nationality = $request->input('country');
            $visa_application->state = $request->input('state');
            $visa_application->zip = $request->input('zip');
            $visa_application->company_name =$request->input('company_name');
            $visa_application->company_country =$request->input('company_country');
            $visa_application->application_status =$request->input('application_status');
            $visa_application->agent_id = $current_agent_id;
            $visa_application->candidate_id = $candidate_id;
            $visa_application->job_post_id = $request->input('job_post_id');
            $visa_application->save();

            return redirect()->back()->with('success_message','visa application has been successfully completed');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
