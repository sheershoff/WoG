<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

protected $username = 'email';
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['email' => strtolower($email), 'password' => $password, 'user_type'=>1,'user_status_id'=>1], $remember)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
}