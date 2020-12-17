<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\user_gs;
use App\user_officer;
use App\user_member;
use DB;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'dname' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
			/* 'profile_Pic'=>['mimes:jpeg,bmp'], */
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

        $uno = 1;
        $dar = $data['user_category'];
        $email = $data['email'];

        $file = $data['profile_Pic'];
        if($file != ""){
           
            $imgname=time().'.'.$file->getClientOriginalName();
            $file->move('img',$imgname);
        }else{
            $imgname = "avatar.png";
        }


        if($dar == 2){
        $emails = DB::table('user_officer')->where('email', $email)->value('email');

        if($emails != ""){

        return User::create([
            'name' => $data['dname'],
            'email' => $emails,
            'password' => Hash::make($data['password']),
            'role_id' => $data['user_category'],
            'is_acitve' => 0,
            'img' => $imgname,
            'user_no' => $uno,

        ]); 
        }
        }elseif($dar == 3){
            $emails = DB::table('user_member')->where('email', $email)->value('email');
            if($emails != ""){

            return User::create([
                'name' => $data['dname'],
                'email' => $emails,
                'password' => Hash::make($data['password']),
                'role_id' => $data['user_category'],
                'is_acitve' => 0,
                'img' => $imgname,
                'user_no' => $uno,

            ]);
            }
        }elseif($dar == 4){
            $emails = DB::table('user_gs')->where('email', $email)->value('email');
            if($emails != ""){

            return User::create([
                'name' => $data['dname'],
                'email' => $emails,
                'password' => Hash::make($data['password']),
                'role_id' => $data['user_category'],
                'is_acitve' => 0,
                'img' => $imgname,
                'user_no' => $uno,

            ]);
            }
        }




    }

	/**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

	 /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectTo()
    {
        return app()->getLocale() .'/login';
    }

    public function __construct()
    {
        $this->middleware('guest');
    }
}
