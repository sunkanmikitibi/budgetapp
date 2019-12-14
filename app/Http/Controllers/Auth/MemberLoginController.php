<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class MemberLoginController extends Controller
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

    protected $guard = 'member';
    protected $redirectTo = '/memberhome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()

    {

        return view('auth.memberlogin');

    }

    public function registerForm()

    {

        return view('auth.memberregister');

    }




    public function login(Request $request)

    {

        if (auth()->guard('member')->attempt(['email' => $request->email, 'password' => $request->password])) {

            dd(auth()->guard('member')->user());

        }



        return back()->withErrors(['email' => 'Email or password are wrong.']);

    }

}
