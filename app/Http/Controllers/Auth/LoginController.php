<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Organization;
use Illuminate\Http\Request;

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

    protected $username = 'email';

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        if ($this->organization == 0) {
            return view('auth.orgLogin');
        } else {
            return view('auth.login');
        }
    }

    protected $organization = 0;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->organization = config('wog.organization');
        $this->organization = isset($this->organization) ? $this->organization : 0;
//        if (!isset($o) && ($o == 0)) {
//            $o = 0;
//        } else {
//            $r = Organization::where('id', '=', $o)->first();
//            //if (isset($o))
//            $this->redirectTo = '/' . $r->code;
//        }
        $this->middleware('guest', ['except' => 'logout']);
//        if (Auth::attempt(['email' => strtolower($email), 'password' => $password, 'user_type' => 1, 'user_status_id' => 1, 'organization_id' => $o], $remember)) {
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $validate = [
            $this->username() => 'required', 'password' => 'required',
        ];
        if ($this->organization == 0) {
            $validate['organization'] = 'required';
        }
        $this->validate($request, $validate);
    }

}
