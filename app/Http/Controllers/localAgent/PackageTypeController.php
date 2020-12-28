<?php

namespace App\Http\Controllers\localAgent;

use App\Http\Controllers\Controller;
use App\PackageLists;
use App\ServiceType;
use bar\baz\source_with_namespace;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PackageTypeController extends Controller
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
        $packageTypes=PackageLists::all()->where('agent_reg_id',$current_agent_id);


        if(session('success_message')){
            Alert::success('Success',session('success_message'))->autoClose(3000);
        }
        else if(session('error_message')){
            Alert::error('Error',session('error_message'))->autoClose(3000);
        }
        return view('local_agent.packageType')->with('packageTypes',$packageTypes);

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
        $current_agent_id=Auth::user()->id;
       if(DB::table('package_lists')
            ->where('agent_reg_id','=',$current_agent_id)
            ->where('package_type','=',$request->input('package_type'))->count()>0){
           return back()->with('error_message','Same package type is not allowed here for twice');

       }
       else{
           $agent_id=Auth::user()->id;
           $addPackageType=new PackageLists();
           $addPackageType->package_type=$request->input('package_type');
           $addPackageType->agent_reg_id=$agent_id;
           $addPackageType->save();
           return redirect()->back()->with('success_message','Package type is added successfully');
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

        $service_types=PackageLists::findOrFail($request->package_type_id);
        $service_types->update($request->all());
        return back()->with('success_message','The package is updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $package_types=PackageLists::findOrFail($request->package_type_id);
        $package_types->delete($request->all());
        return back()->with('success_message','The package is successfully deleted');
    }
}
