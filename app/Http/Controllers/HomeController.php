<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          if(Auth::user()->role_id == 2){
            return redirect()->action('CofficerController@index');
           }elseif(Auth::user()->role_id == 1){
            return redirect()->action('adminUserController@index');

           }
    }
}
