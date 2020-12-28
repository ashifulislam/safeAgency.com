<?php

namespace App\Http\Controllers\localAgent;

use App\Http\Controllers\Controller;
use App\ManageService;
use App\PackageLists;
use App\ServiceType;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Description;
use RealRashid\SweetAlert\Facades\Alert;

class ServicePostController extends Controller
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
        $current_agent_id=Auth::user()->id;


        $data['services']=DB::table('service_types')
                ->select('service_types.service_title','service_types.service_type','manage_services.service_description','package_lists.package_type')
                ->join('manage_services','service_types.id','=','manage_services.service_type_id')
                ->join('package_lists','package_lists.id','=','manage_services.package_type_id')
                ->where(['service_types.agent_reg_id'=>$current_agent_id])
                ->get();

           $data['packages']=DB::table('package_lists')
               ->where('agent_reg_id','=',$current_agent_id)
               ->get();
           $data['service_types']=ServiceType::all()
           ->where('agent_reg_id',$current_agent_id);

//


         if(session('success_message')){
            Alert::success('Success',session('success_message'))->autoClose(3000);
         }
         else if(session('error_message')){
            Alert::error('Error',session('error_message'))->autoClose(3000);
         }

      return view('local_agent.servicePost',$data);
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
        $service_type_id=$request->input('type_id');
        $current_agent_id=Auth::user()->id;

        if(ManageService::all()
            ->where('service_type_id',$service_type_id)
                ->where('package_type_id',$request->input('package_type'))
                ->count()>0){
            return back()->with('error_message','The service is posted already');

        }
        else{


                $postService=new ManageService();
                $postService->service_description=$request->input('description');
                $postService->demand=$request->input('demand');
                $postService->agent_reg_id=$current_agent_id;
                $postService->service_type_id=$service_type_id;
                $postService->package_type_id=$request->input('package_type');
                $postService->save();

                return back()->with('success_message','The service is posted successfully');
            }

        }


//
//      //  service_id,agent_id,type,Description




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
