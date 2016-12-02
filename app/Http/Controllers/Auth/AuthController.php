<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\ActivationService;
use Auth;
use Hash;

class AuthController extends Controller
{
     use AuthenticatesAndRegistersUsers;
    protected $activationService;
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

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
     public function __construct(ActivationService $activationService)
     {
         $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
         $this->activationService = $activationService;
    }

 public function register(Request $request)
 {
     $validator = $this->validator($request->all());

     if ($validator->fails()) {
         $this->throwValidationException(
             $request, $validator
         );
     }

     $user = $this->create($request->all());

     $this->activationService->sendActivationMail($user);

     return redirect('/login')->with('status', 'We sent you an activation code. Check your email.');
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
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function authenticated(Request $request, $user)
{
    if (!$user->activated) {
        $this->activationService->sendActivationMail($user);
        auth()->logout();
        return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
    }
    return redirect()->intended($this->redirectPath());
}

    public function activateUser($token)
    {
        if ($user = $this->activationService->activateUser($token)) {
            auth()->login($user);
            return redirect($this->redirectPath());
        }
        abort(404);
    }

}
