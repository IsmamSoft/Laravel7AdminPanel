<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
// use Image;

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
    protected $redirectTo = "/";

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
        // return Validator::make($data, [
        //     'name'       => ['required', 'string', 'max:255'],
        //     'f_name'     => ['required', 'string', 'max:255'],
        //     'l_name'     => ['required', 'string', 'max:255'],
        //     'phone'      => ['required', 'string', 'max:255'],
        //     'bloodgroup' => ['required', 'string', 'max:8'],
        //     'gender'     => ['required', 'string', 'max:8'],
        //     'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'status'     => ['required', 'string', 'string','max:5'],
        //     'age'        => ['required', 'string', 'string','max:5'],
        //     'password'   => ['required', 'string', 'min:8', 'confirmed'],
        //     'avatar'     => ['sometimes','image',  'mimes:jpg,jpeg,png', 'max:8000'],
        // ]);

        return Validator::make($data, [
            'name'       => ['required', 'string', 'max:255'],
            'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'   => ['required', 'string', 'min:8', 'confirmed'],
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
            // User Upload Avatar
            // if($request->hasFile('avatar')){
            //     $avatar =   $request->file('avatar');
            //     $filename = time() . '.' .$avatar->getClientOriginalExtension();
            //     Image::make($avatar)->resize(250, 230)->save( public_path('/user/'. $filename) );
            //     $user = Auth::user();
            //     $user->avatar = $filename;
            //     $user->save();
            // }

        // if (request()->has('avatar')){
        //     $avataruploaded = request()->file('avatar');
        //     $avatarname = time().'.'.$avataruploaded->getClientOriginalExtension();
        //     $avatarpath = public_path('/user/');
        //     $avataruploaded->move($avatarpath, $avatarname);
        //     return User::create([
        //         'name'         => $data['name'],
        //         'f_name'       => $data['f_name'],
        //         'l_name'       => $data['l_name'],
        //         'phone'        => $data['phone'],
        //         'bloodgroup'   => $data['bloodgroup'],
        //         'gender'       => $data['gender'],
        //         'email'        => $data['email'],
        //         'status'       => $data['status'],
        //         'age'          => $data['age'],
        //         'password'     => Hash::make($data['password']),
        //         'avatar'       => '/user/' .$avatarname
        //     ]);
        // }

        return User::create([
            'name'         => $data['name'],
            'email'        => $data['email'],
            'password'     => Hash::make($data['password']),
        ]);
    }
}
