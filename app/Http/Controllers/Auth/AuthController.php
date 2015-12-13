<?php

namespace LosCedros\Http\Controllers\Auth;

use LosCedros\Models\Usuario;
use Validator;
use LosCedros\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
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

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/';

    protected $username = 'usuario';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'usuario' => 'required|max:10|min:6|unique:usuarios',
            'password' => 'required|confirmed|min:6',
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Usuario
     */
    protected function create(array $data)
    {
        return Usuario::create([
            'nombre' => $data['nombre'],
            'usuario' => $data['usuario'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
