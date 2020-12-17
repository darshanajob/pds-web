<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\approval_for_water_supply;
use App\bussinessper;
use App\building_app;
use App\cut_tree;
use App\enaviron_protect;

class CofficerController extends Controller
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

        $bussinessper = bussinessper::all()->where('status', '0');
        $count1 = $bussinessper->count();
        $bussinessperA = bussinessper::all()->where('status', '1');
        $count1A = $bussinessperA->count();

        $building_app = building_app::all()->where('status', '0');
        $count2 = $building_app->count();
        $building_appA = building_app::all()->where('status', '1');
        $count2A = $building_appA->count();

        $cut_tree = cut_tree::all()->where('status', '0');
        $count3 = $cut_tree->count();
        $cut_treeA = cut_tree::all()->where('status', '1');
        $count3A = $cut_treeA->count();

        $enaviron_protect = enaviron_protect::all()->where('status', '0');
        $count4 = $enaviron_protect->count();
        $enaviron_protectA = enaviron_protect::all()->where('status', '1');
        $count4A = $enaviron_protectA->count();


        return view('officer.officerHome', compact('approval_for_water_supply','test','testA','bussinessper','bussinessperA','count1','count1A','building_app','building_appA','count2','count2A','cut_tree','cut_treeA','count3','count3A','enaviron_protect','count4','enaviron_protectA','count4A'));
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
        echo $id;
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
        //
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
