<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\religionMod;

class religionCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $religions=religionMod::all();
        return view('religionIndex',compact('religions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('religionView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['religionDesc'=>'required']);

        $religions=new religionMod([
                'religionDesc'=>$request->get('religionDesc'),
                'active'=>$request->get('active'),
                'remark'=>$request->get('remark')]);

        $religions->save();
        return redirect('/religionCN')->with('success','Successfully');
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
       $religions=religionMod::find($id);
       return view('religionEdit',compact('religions'));
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
        $request->validate(['religionDesc'=>'required']);

        $religions= religionMod::find($id);
        $religions->religionDesc=$request->get('religionDesc');
        $religions->active=$request->get('active');
        $religions->remark=$request->get('remark');

        $religions->save();
        return redirect('/religionCN')->with('success','Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $religions =religionMod::find($id);
        $religions->delete();
        return redirect('/religionCN')->with('success','Successfully deleted!');
    }
}
