<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Candidate;
use RealRashid\SweetAlert\Facades\Alert;

class AddCandidateController extends Controller
{

    public function __construct(){
//        $this->middleware('auth:candidate');

    }
    public function showHome(){
        return view('candidate/home');
    }
    public function showCandidate(Request $request){
        if(session('success_message')){
            Alert::success('Success',session('success_message'))->autoClose(3000);
        }
        else if(session('error_message')){
            Alert::error('Error',session('error_message'));
        }

        return view('candidate/candidateProfile');

    }
    public function addCandidate(Request $request){

        $rules=[
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'password'=>'required|min: 4|',
            'reType'=>'required',
            'softSkills'=>'required',
            'skill_name'=>'required',
            'myCheck'=>'required'
        ];
        $request->validate($rules);

        $addCandidate=new Candidate();
        if($request->input('password')!=$request->input('reType')){

            return redirect('/candidateProfile')->with('passNotMatch','Password did not match');
        }

        elseif(Candidate::where('email','=',$request->input('email'))->count()>0){
            return back()->with('error_message','The profile is already exists');
        }else{

            $addCandidate->firstName=$request->input('firstName');
            $addCandidate->lastName=$request->input('lastName');
            $addCandidate->email=$request->input('email');
            $addCandidate->password=bcrypt($request->input('password'));
            $addCandidate->degree=$request->input('degreeType');
            $addCandidate->From=$request->input('From');
            $addCandidate->To=$request->input('To');
            $addCandidate->institute=$request->input('institute');
            $addCandidate->title=$request->input('jobTitle');
            $addCandidate->eFrom=$request->input('eFrom');
            $addCandidate->eTo=$request->input('eTo');
            $addCandidate->org=$request->input('org');
            $addCandidate->address=$request->input('address');

            $addCandidate->softSkills=$request->input('softSkills');
            $addCandidate->skill_name=$request->input('skill_name');


            $addCandidate->save();
            return back()->with('success_message','Your profile is created successfully');
//            Toastr::success('candidate added successfully saved:)','success');
//            return redirect('/candidateProfile');

        }
    }
}
