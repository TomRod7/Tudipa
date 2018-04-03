<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
          'name' => 'required|string|max:255',
          'lastname' => 'required|string|max:255',
          'dateB' => 'required',
          'country' => 'required|string',
          'province' => 'required_if:country,1',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',

      ],
      [
        'name.required'=> 'El campo Nombre es requerido.',
        'lastname.required'=> 'El campo Apellido es requerido.',
        'dateB.required'=> 'El campo Fecha de Nacimiento es requerido.',
        'country.required' => 'El campo País de Residencia es requerido.',
        'email.required'=> 'El campo Email es requerido.',
        'password.required'=> 'El campo Contraseña es requerido.',
        'password_confirmation.required'=> 'El campo Repetir Contraseña es requerido.'

      ]);
  }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      return User::create([
          'name' => $data['name'],
          'lastname' => $data['lastname'],
          'dateB' => $data['dateB'],
          'country' => $data['country'],
          'province' => ( !isset($data['province'])? '': $data['province'] ),
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
      ]);
  }
}
