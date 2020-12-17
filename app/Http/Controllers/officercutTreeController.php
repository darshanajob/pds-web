<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cut_tree;
use DB;

class officercutTreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cut_tree = cut_tree::all()->where('status', '0');
        $count3 = $cut_tree->count();
        $cut_treeA = cut_tree::all()->where('status', '1');
        $count3A = $cut_treeA->count();

        return view('officer.treeall', compact('cut_tree','count3','count3A'));
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
        $cut_tree = cut_tree::findOrFail($id);

        return view('officer.cut_treeApp', compact('cut_tree'));
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
        $user = cut_tree::findOrFail($id);
        $updateuser = DB::table('cut_tree')
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
