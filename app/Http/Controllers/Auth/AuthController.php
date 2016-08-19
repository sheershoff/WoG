<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AuthController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */

use AuthenticatesAndRegistersUsers,
    ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    //Для LDAP
    protected $username = 'email';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6|confirmed',
        ]);
//$rule = array(
//   'user_name' => 'required|unique:users,user_name',
//   'user_name_lower' => 'not_in:admin,webmaster');
//then, in you validator, you should add the user_name_lower with the user_name as lower case.
//$arrayToValidate = array_add($arrayToValidate, 'user_name_lower', strtolower($arrayToValidate['user_name']))
        }

    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'email' => mb_convert_case($data['email'], MB_CASE_LOWER, "UTF-8"),
                    'password' => bcrypt($data['password']),
        ]);
    }

//    public function authenticate()
//        {
//            if (Auth::attempt(['email' => strtolower($email), 'password' => $password])) {
//                // Authentication passed...
//                return parent::authenticate();
//            }
//        }    
//        
//    public function login(Request $request) {
//        var_dump($request);
//        parent::login($request);
//    }
//
//        $this->validate($request, [
//            'email' => 'required', 'password' => 'required',
//        ]);
////
//        $email = trim(strtolower($request->input('email')));
//        $password = $request->input('password');
//
//        // if the username is an email address, try and find them in the local db
//        if (preg_match('/\@/', $username)) {
//            // try normal local laravel Auth::attempt() login and redirect out
//        }
//
//        // try LDAP auth
//        $result = $this->ldap->authenticate($email, $password);
//        if (!$result) {
//            return redirect()->refresh()->withErrors(['errors' => 'Username and/or password are incorrect.']);
//        }
//
//        $email = $result['email'];
//
//        $user = User::where('email', '=', $email)->first();
//        if (!$user) {
//            // create a new $user from the ldap $results or bail out depending on the app
//        }
//
//        Auth::login($user);
//
//        return redirect()->intended($this->redirectTo);
//    }
/*public function postLogin(Request $request)
 {
		$this->validate($request, [
			'email' => 'required|email', 'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');

		if ($this->attempt($credentials, $request->has('remember')))
		{
			return redirect()->intended($this->redirectPath());
		}

		return redirect($this->loginPath())
					->withInput($request->only('email', 'remember'))
					->withErrors([
						'email' => $this->getFailedLoginMessage(),
					]);
	}   */
 }
    
