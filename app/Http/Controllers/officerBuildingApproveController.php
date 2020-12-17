<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\building_app;
use DB;

class officerBuildingApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $building_app = building_app::all()->where('status', '0');
        $count2 = $building_app->count();
        $building_appA = building_app::all()->where('status', '1');
        $count2A = $building_appA->count();

        return view('officer.buildall', compact('building_app','count2','count2A'));
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
        $building_app = building_app::find($id);

        return view('officer.building_approve', compact('building_app'));
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
        $user = building_app::findOrFail($id);
        $updateuser = DB::table('building_app')
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
