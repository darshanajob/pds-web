<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bussinessper;
use DB;

class officerBussinessperappControoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bussinessper = bussinessper::all()->where('status', '0');
        $count1 = $bussinessper->count();
        $bussinessperA = bussinessper::all()->where('status', '1');
        $count1A = $bussinessperA->count();

        return view('officer.bussinessall', compact('bussinessper','count1','count1A'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bussinessper = bussinessper::findOrFail($id);

        return view('officer.Approvebussinessper', compact('bussinessper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $user = bussinessper::findOrFail($id);
        $updateuser = DB::table('bussinessper')
        ->where('id', $id)
        ->update([
            'status' => 1,


        ]);
        if($updateuser){
            return back()->withInput()->with('success', 'successfully approve');
             }else{
            return back()->withInput()->with('errors', 'Error approve ');
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
