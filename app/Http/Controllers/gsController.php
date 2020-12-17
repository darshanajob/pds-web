<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\user_gs;
use App\gs_division;
use DB;

class gsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user_gs::all();

        return view('admin.viewGS', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$gsdivision = gs_division::pluck('name','id');
        return view('admin.addGS', compact('gsdivision'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $addGsUser = user_gs::create($request->all());
		if($addGsUser){
			return back()->withInput()->with('success', 'Successfully added the village officer');
        }else{
			return back()->withInput()->with('errors', 'Error in adding the village officer');
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
		
        $user = user_gs::findOrFail($id);
        return view('admin.editGS', compact('user'));
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
        $user_gs = User::findOrFail($id);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('result');
        $atomDateTime = Carbon::now();

       if($password == '1'){
        $file = $request->image;
        $imgname = time().$file->getClientOriginalName();
            $file->move('img',$imgname);
       $user_gs = DB::table('user_gs')
       ->where('id', $id)
       ->update([
           'name' => $name,
           'email' => $email,
           'password' => Hash::make('123'),
           'updated_at' => $atomDateTime,
           "img" => $imgname,

       ]);
       if($user_gs){
           return back()->withInput()->with('success', 'success creating new village officer');
            }else{
           return back()->withInput()->with('errors', 'Error creating new village officer');
            }
       }elseif($password == '0'){
        $file = $request->image;
        $imgname = time().$file->getClientOriginalName();
            $file->move('img',$imgname);
       $updateuser = DB::table('user_gs')
       ->where('id', $id)
       ->update([
           'name' => $name,
           'email' => $email,
           'updated_at' => $atomDateTime,
           "img" => $imgname,
           ]);
       }

       if($user_gs){
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
        //
    }
}
