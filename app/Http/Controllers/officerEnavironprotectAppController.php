<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enaviron_protect;
use DB;

class officerEnavironprotectAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enaviron_protect = enaviron_protect::all()->where('status', '0');
        $count4 = $enaviron_protect->count();
        $enaviron_protectA = enaviron_protect::all()->where('status', '1');
        $count4A = $enaviron_protectA->count();

        return view('officer.envronall', compact('enaviron_protect','count4','count4A'));
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
        $enaviron_protect = enaviron_protect::findOrFail($id);

        return view('officer.enaviron_protectApp', compact('enaviron_protect'));
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
        $user = enaviron_protect::findOrFail($id);
        $updateuser = DB::table('enaviron_protect')
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
