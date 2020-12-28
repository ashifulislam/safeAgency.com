<?php

namespace App\Http\Controllers\admin;

use App\Candidate;
use App\Employer;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

use App\Subscriber;


class SubscriberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function delete($id){

        $delete=Subscriber::where('id',$id);
        $delete->delete();
        return redirect('/userSubscriber')->with('DeleteSuccess','Deleted Successfully');
    }
    public function showSubscribers()
    {

        $showSubscribers =Subscriber::all();
        for($i=0;$i<count($showSubscribers);$i++){
            //dd($showSubscribers[$i]['email']);
            $isemp =$this->isEmployer($showSubscribers[$i]['email']);
            $iscand = $this->isCandidate($showSubscribers[$i]['email']);
            if($isemp == null && $iscand == null){
                $showSubscribers[$i]['userType'] = "Normal User";

            }else{
                if($isemp != null ){
                    $showSubscribers[$i]['userType'] = "Employer";
                }
                if($iscand != null ){
                    $showSubscribers[$i]['userType'] = "Candidate";
                }
            }

        }

              if(auth::check() && auth::guard('employer')){
                  return view('admin/showSubscribers',['showSubscribers'=>$showSubscribers]);
              }else if(auth::check() && auth::guard('candidate')){
                  return view('admin/showSubscribers',['showSubscribers'=>$showSubscribers]);

              }
              else {
                  return view('admin/showSubscribers',['showSubscribers'=>$showSubscribers]);

              }



    }

    public function isEmployer($email){
        $true = Employer::where('email',$email)->first();
        return $true;
    }
    public function isCandidate($email){
        $true = Candidate::where('email',$email)->first();
        return $true;
    }



}
