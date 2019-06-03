<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\roomStatusMod;

class roomStatusCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomStatuss=roomStatusMod::all();
        return view('roomStatusIndex',compact('roomStatuss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('roomStatusView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['roomStatusDesc'=>'required']);

        $roomStatuss=new roomStatusMod([
                'roomStatusDesc'=>$request->get('roomStatusDesc'),
                'active'=>$request->get('active'),
                'remark'=>$request->get('remark')]);

        $roomStatuss->save();
        return redirect('/roomStatusCN')->with('success','Successfully');
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
        $roomStatuss=roomStatusMod::find($id);
        return view('roomStatusEdit',compact('roomStatuss'));
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
        $request->validate(['roomStatusDesc'=>'required']);

        $roomStatuss= roomStatusMod::find($id);
        $roomStatuss->roomStatusDesc=$request->get('roomStatusDesc');
        $roomStatuss->active=$request->get('active');
        $roomStatuss->remark=$request->get('remark');

        $roomStatuss->save();
        return redirect('/roomStatusCN')->with('success','Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomStatuss =roomStatusMod::find($id);
        $roomStatuss->delete();
        return redirect('/roomStatusCN')->with('success','Successfully deleted!');
    }
}
