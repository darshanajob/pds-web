<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\approval_for_water_supply;
use App\bussinessper;
use App\building_app;
use App\cut_tree;
use App\enaviron_protect;
use DB;

class officerApprovalWaterSupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approval_for_water_supply = approval_for_water_supply::all()->where('status', '0');
        $test = $approval_for_water_supply->count();
        $approval_for_water_supplyA = approval_for_water_supply::all()->where('status', '1');
        $testA = $approval_for_water_supplyA->count();

        return view('officer.Wsupall', compact('approval_for_water_supply','test','testA'));
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

        $ApprovelWsup = approval_for_water_supply::findOrFail($id);

        return view('officer.ApprovelWsup', compact('ApprovelWsup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $user = approval_for_water_supply::findOrFail($id);
        $updateuser = DB::table('approval_for_water_supply')
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
