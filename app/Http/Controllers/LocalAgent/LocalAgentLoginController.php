<?php

namespace App\Http\Controllers\LocalAgent;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\ValidationException;

class LocalAgentLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:localAgent')->except('logout');
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }
    public function showLoginForm()
    {
        return view('Auth.authOfLocalAgent.local_agent_login_update');
    }
    public function login(Request $request)
    {
        $this->validateLogin($request);
//        $this->validate($request,[
//            'email'=>'required|string',
//            'password'=>'required|string',
//        ]);

        $credentials=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        // dd($credentials);
        if(Auth::guard('localAgent')->attempt($credentials,$request->remember))
        {
            return redirect()->intended(route('localAgent.dashboard'));
        }
        return $this->sendFailedLoginResponse($request);
    }
    public function logout(Request $request)
    {
        Auth::guard('localAgent')->logout();
        return redirect('/homePage');
    }
}
