<?php

namespace App\Http\Controllers\NOAPI;

use App\AgentsProfile;
use App\CustomerRegistration;
use App\Http\Controllers\Controller;
use App\LocalAgent;
use Illuminate\Http\Request;
use App\Customer;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Response;
class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:localAgent');
    }
    public function index()
    {

        $user_id = Auth::user()->id;

        return  $user =  DB::table('local_agents')

            ->select('agents_profiles.bio','agents_profiles.photo','agents_profiles.about','agents_profiles.interest','agents_profiles.skill','agents_profiles.agent_reg_id','local_agents.name','local_agents.email','agents_profiles.age','local_agents.phone')

            ->join('agents_profiles','agents_profiles.agent_reg_id','=','local_agents.id')
            ->where(['local_agents.id'=>$user_id])
            ->get();

    }
    public function update(Request $request, $id)
    {



        if($request->photo)
        {
            $profile = AgentsProfile::where('agent_reg_id',$id)->first();

            $image_path = "img/profile/".$profile->photo;
            if(file_exists($image_path))
            {
                @unlink($image_path);
            }
            //To convert string to image
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('img/profile/').$name);

            $agent = LocalAgent::findOrFail($id);
            $agent = LocalAgent::where('id',$id)->first();
            $agent->name = $request->input('name');
            $agent->email = $request->input('email');



            $this->validate($request,[
                'name' => 'required|string|max:191',
                'email' => 'required|string|email|max:191|unique:users,email,'.$agent->id,
                'age' => 'required|integer|max:191',
                'skill' => 'required|string|max:190',
                'interest' => 'required|string|max:69',
                'about' => 'required|string|max:10000',
            ]);
            if($agent->save())
            {
                AgentsProfile::where('agent_reg_id',$id)->update(array('bio'=>$request['bio'],'skill'=>$request['skill'],'interest'=>$request['interest'],'about'=>$request['about'],'photo'=>$name));
                return response()->json(['success'=>'everything is ok'],201);

            }
        }
        else
            {
            return response()->json(['error'=>'you have to choose your file'],200);

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'age' => 'required|string|max:191',
            'skill' => 'required|string|max:190',
            'interest' => 'required|string|max:69',
            'about' => 'required|string|max:1000'
        ]);
        if($request->photo)
        {
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('img/profile/').$name);
            $request->merge(['photo'=>$name]);
            $id = Auth::user()->id;
            $customer_existence=AgentsProfile::where('agent_reg_id','=',$id)->first();
            if($customer_existence==null)
            {


                return AgentsProfile::create([
                    'age' => $request['age'],
                    'skill' => $request['skill'],
                    'interest' => $request['interest'],
                    'bio' => $request['bio'],
                    'about'=>$request['about'],

                    'photo' => $request['photo'],
                    'agent_reg_id' => $id,

                ]);
                return response()->json(['success'=>'everything is ok'],201);


            }
            else{
                return response()->json(['error'=>'profile already exists'],202);

            }
        }

        else{

            return response()->json(['error'=>'you have to choose your file'],200);

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $profile = AgentsProfile::where('agent_reg_id',$id)->first();

        $image_path = "img/profile/".$profile->photo;
        if(file_exists($image_path))
        {
            @unlink($image_path);
        }
        //delete the user
        if($profile->delete())
        {
            return  DB::table('local_agents')
                ->where('id', $id)
                ->update([
                    'name' => '',

                ]);
        }
        return ['message'=>'The user is successfully deleted'];
    }


}
