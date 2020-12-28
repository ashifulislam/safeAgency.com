<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
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
        $this->middleware('guest:candidate')->except('logout');
    }
    public function showLoginForm()
    {
        return view('candidate.login');
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }
    public function login(Request $request){
        $this->validateLogin($request);


        $credentials=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        // dd($credentials);
        if(Auth::guard('candidate')->attempt($credentials,$request->remember)){
            return redirect()->intended(route('candidate.home'));
        }
        return $this->sendFailedLoginResponse($request);
    }
    public function logout(Request $request){
        Auth::guard('candidate')->logout();
        return redirect('/homePage');
    }
}
