<?php

namespace App\Http\Controllers;

use App\cut_tree;
use Illuminate\Http\Request;
use DB;

class cuttreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $cut_tree = cut_tree::create([

                    "reg_name" => $request->input('txtNamereq'),


                      ]);

          if($cut_tree){
                   return back()->withInput()->with('success', 'success creating new record');
            }else{
                   return back()->withInput()->with('errors', 'Error creating new record');
               }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cut_tree  $cut_tree
     * @return \Illuminate\Http\Response
     */
    public function show(cut_tree $cut_tree)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cut_tree  $cut_tree
     * @return \Illuminate\Http\Response
     */
    public function edit(cut_tree $cut_tree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cut_tree  $cut_tree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cut_tree $cut_tree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cut_tree  $cut_tree
     * @return \Illuminate\Http\Response
     */
    public function destroy(cut_tree $cut_tree)
    {
        //
    }
}
