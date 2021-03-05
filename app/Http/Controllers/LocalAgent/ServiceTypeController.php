<?php

namespace App\Http\Controllers\LocalAgent;

use App\Http\Controllers\Controller;
use App\ServiceType;
use bar\baz\source_with_namespace;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceTypeController extends Controller
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
        $serviceTypes=ServiceType::all()->where('agent_reg_id',$current_agent_id);


        if(session('success_message')){
            Alert::success('Success',session('success_message'))->autoClose(3000);
        }
        return view('local_agent.manageServiceType')->with('serviceTypes',$serviceTypes);

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


        $agent_id=Auth::user()->id;
        $addServiceType=new ServiceType();
        $addServiceType->service_title=$request->input('title');
        $addServiceType->service_type=$request->input('type');
        $addServiceType->agent_reg_id=$agent_id;
        $addServiceType->save();
        return redirect()->back()->with('success_message','Service type is added successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
    public function update(Request $request)
    {

        $service_types=ServiceType::findOrFail($request->service_type_id);
        $service_types->update($request->all());
        return back()->with('success_message','The service is updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $service_types=ServiceType::findOrFail($request->service_type_id);
        $service_types->delete($request->all());
        return back()->with('success_message','The service is successfully deleted');
    }
}
