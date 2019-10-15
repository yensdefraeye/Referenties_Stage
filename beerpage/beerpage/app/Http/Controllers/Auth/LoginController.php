<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Role;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/beers';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(Request $request) //show the login form
    {

        return view('auth.login');
    }

    public function login(Request $request) //handle the login
    {
        //validate the users credentials, if false show errors
        $validatedData = $request->validate([
            'email' => 'required|min:10',
            'password' => 'required|min:5'
        ]);

        //check is users credentials are correct
        if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
            // Authentication passed...
            if (Auth::user()->role_id === 1){
                $request->session()->flash('alert-success', 'Je bent ingelogd.');
            }
            if (Auth::user()->role_id === 2){
                $request->session()->flash('alert-success', 'Je bent ingelogd als administrator.');
            }

            return redirect()->route('index');
        } else {
            return redirect()->route('login')->withErrors('Your email or password is incorrect.');
        }
    }

    public function logout(Request $request) //log out user
    {
        Auth::logout();
        return redirect('/login');
    }
}
