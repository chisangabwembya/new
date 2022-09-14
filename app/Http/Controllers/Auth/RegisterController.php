<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'l_name' => ['required', 'string', 'max:255'],
            'f_name' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'nrc' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'town' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'client_type' => ['required', 'string', 'max:255'],
            'hobbies' => ['required', 'string', 'max:255'],
            'bank_name' => ['required', 'string', 'max:255'],
            'bank_account' => ['required', 'string', 'max:255'],
            'bank_branch' => ['required', 'string', 'max:255'],
            'bank_address' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'bank_email' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'l_name' => $data['l_name'],
            'f_name' => $data['f_name'],
            'dob' => $data['dob'],
            'nrc' => $data['nrc'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'area' => $data['area'],
            'street' => $data['street'],
            'town' => $data['town'],
            'province' => $data['province'],
            'country' => $data['country'],
            'bank_name' => $data['bank_name'],
            'bank_account' => $data['bank_account'],
            'bank_branch' => $data['bank_branch'],
            'bank_address' => $data['bank_address'],
            'phone_number' => $data['phone_number'],
            'bank_email' => $data['bank_email'],
            'client_type' => $data['client_type'],
            'hobbies' => $data['hobbies'],
            'sex' => $data['sex'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
