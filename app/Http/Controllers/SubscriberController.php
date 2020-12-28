<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required|email|unique:subscribers'
        ]);
        $subscriber= new Subscriber();
        $subscriber->email=$request->input('email');
        $subscriber->save();

        return redirect()->back()->with('message', 'Subscribed Successfully!');
    }
}
