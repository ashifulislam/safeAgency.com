<?php

namespace App\Http\Controllers\NOAPI;

use App\CustomerRegistration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Response;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:customer');
    }
    public function index()
    {

           $user_id = Auth::user()->id;

          //  return $customer_profile= CustomerRegistration::with('profiles')->where('id',$user_id)->first();
//        DB::table('users')
//
//            ->select('users.id','users.name','profiles.photo')
//
//            ->join('profiles','profiles.id','=','users.id')
//
//            ->where(['something' => 'something', 'otherThing' => 'otherThing'])
//
//            ->get();
              return  $user=  DB::table('customer_registrations')

            ->select('customers.bio','customers.about','customers.interest','customers.skill','customers.customer_reg_id','customer_registrations.name','customer_registrations.email','customers.age','customer_registrations.phone')

            ->join('customers','customers.customer_reg_id','=','customer_registrations.id')
            ->where(['customer_registrations.id'=>$user_id])
            ->get();



    }
    public function update(Request $request, $id)
    {

        $user = CustomerRegistration::findOrFail($id);
        $user = CustomerRegistration::where('id',$id)->first();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'age' => 'required|integer|max:191',
            'skill' => 'required|string|max:190',
            'interest' => 'required|string|max:69',
            'about' => 'required|string|max:10000'


        ]);
        if($user->save()){
           // $profile = Customer::findOrFail($id);
            $profile = Customer::where('customer_reg_id',$id)->first();
            $profile->bio = $request->input('bio');
            $profile->skill= $request->input('skill');
            $profile->interest = $request->input('interest');
            $profile->about = $request->input('about');


            $profile->save();
        }



//        $user=Customer::findOrFail($id);
//
//        $this->validate($request,[
//            'name' => 'required|string|max:191',
//            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
//            'age' => 'required|integer|max:191',
//            'skill' => 'required|string|max:190',
//            'interest' => 'required|string|max:69'
//
//        ]);
//        $user->update($request->all());
//
//        return ['message'=>'Update the user info'];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::user();


        $this->validate($request,[
            'age' => 'required|string|max:191',
            'skill' => 'required|string|max:190',
            'interest' => 'required|string|max:69',
            'about' => 'required|string|max:1000'
        ]);
        $currentPhoto=$user->photo;
        if($request->photo != $currentPhoto){
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('img/profile/').$name);
            $request->merge(['photo'=>$name]);

            $userPhoto=public_path('img/profile/').$currentPhoto;
            if(file_exists($userPhoto)){
                @unlink($userPhoto);
            }
        }
        $id = Auth::user()->id;

//        $user = User::where('email', '=', Input::get('email'))->first();
//        if ($user === null) {
//            // user doesn't exist
//        }
        $customer_existence=Customer::where('customer_reg_id','=',$id)->first();

        if($customer_existence==null){


            return Customer::create([
                'age' => $request['age'],
                'skill' => $request['skill'],
                'interest' => $request['interest'],
                'bio' => $request['bio'],
                'about'=>$request['about'],

                'photo' => $request['photo'],
                'customer_reg_id' => $id,
                //'password' => Hash::make($request['password']),

            ]);

        }
        else{
          return response()->json(['error'=>'resource not found'],200);

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

        $profile = Customer::where('customer_reg_id',$id)->first();
        //delete the user
        if($profile->delete()){
        return  DB::table('customer_registrations')
            ->where('id', $id)
            ->update([
                'name' => '',

            ]);
      }
        return ['message'=>'The user is successfully deleted'];
    }


}
