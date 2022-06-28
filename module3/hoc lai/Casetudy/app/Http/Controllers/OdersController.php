<?php

namespace App\Http\Controllers;

use App\Models\Oders;
use App\Http\Requests\StoreOdersRequest;
use App\Http\Requests\UpdateOdersRequest;
use App\Models\User;

class OdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users=User::all();
        $oders=Oders::all();
        return view('admin.oders.index',compact('oders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('admin.oders.add',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOdersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOdersRequest $request)
    {
        // $oder= new Oder();
        // $oder->
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oders  $oders
     * @return \Illuminate\Http\Response
     */
    public function show(Oders $oders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oders  $oders
     * @return \Illuminate\Http\Response
     */
    public function edit(Oders $oder)
    {
        $id=$oder->id;
        $users= User::all();
        return view('admin.oders.edit',compact('id','oder','users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOdersRequest  $request
     * @param  \App\Models\Oders  $oders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOdersRequest $request, Oders $oders)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oders  $oders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oders $oders)
    {
        //
    }
}
