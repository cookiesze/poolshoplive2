<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

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
            'member' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'sname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'line' => ['required'],
            'link' => ['required'],
            'avatar' => ['image'],
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

        if(request()->hasfile('avatar')){
            $avatarName = time().'.'.request()->avatar->getClientOriginalExtension();
            request()->avatar->move(public_path('assets/uploads/avatar'), $avatarName);
        }
        return User::create([
            'member' => $data['member'],
            'fname' => $data['fname'],
            'sname' => $data['sname'],
            'phone' => $data['phone'],
            'line' => $data['line'],
            'link' => $data['link'],
            'avatar' => $avatarName,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

}
