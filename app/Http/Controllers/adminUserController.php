<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\User;
use App\Role;
use DB;
use Carbon\Carbon;
use App\user_officer;
use App\user_member;


class adminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();

        return view('admin.adminHome', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addUser');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required|string|max:255',
            'gender' => 'required',
            'civilstatus' => 'required',
			'nic' => ['required', 'regex:/^[0-9]{9}[vV]|[0-9]{12}$/'],
            'email' => 'required|string|email|max:255',
            'dtype' => 'required',
            'tpLand' => 'max:10|min:10',
            'tpMobile' => 'max:10|min:10',
            'address' => 'required|string',

        ]);

        $checkDB = $request->dtype;
        if($checkDB == 2){
            $user = user_officer::create($request->all());

            if($user){
           return back()->withInput()->with('success', 'success creating new user');
            }else{
           return back()->withInput()->with('errors', 'Error creating new user');
            }
        }elseif($checkDB == 3){
            $user = user_member::create($request->all());

            if($user){
           return back()->withInput()->with('success', 'success creating new user');
            }else{
           return back()->withInput()->with('errors', 'Error creating new user');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users',


        ]);
        $user = User::findOrFail($id);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('result');
        $atomDateTime = Carbon::now();

       if($password == '1'){
        $file = $request->image;
        $imgname = time().$file->getClientOriginalName();
            $file->move('img',$imgname);
       $updateuser = DB::table('users')
       ->where('id', $id)
       ->update([
           'name' => $name,
           'email' => $email,
           'password' => Hash::make('123'),
           'updated_at' => $atomDateTime,
           "img" => $imgname,

       ]);
       if($updateuser){
           return back()->withInput()->with('success', 'success creating new user');
            }else{
           return back()->withInput()->with('errors', 'Error creating new user');
            }
       }elseif($password == '0'){
        $file = $request->image;
        $imgname = time().$file->getClientOriginalName();
            $file->move('img',$imgname);
       $updateuser = DB::table('users')
       ->where('id', $id)
       ->update([
           'name' => $name,
           'email' => $email,
           'updated_at' => $atomDateTime,
           "img" => $imgname,
           ]);
       }

       if($updateuser){
           return back()->withInput()->with('success', 'success creating new user');
            }else{
           return back()->withInput()->with('errors', 'Error creating new user');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Delete = User::findorfail($id);
        $Delete->delete();
           if($Delete){
            return back()->withInput()->with('success', 'Success Delete Product');
             }else{
            return back()->withInput()->with('errors', 'Error Delete Product');
             }
    }
}
