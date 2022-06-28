<?php

namespace App\Http\Controllers;

use App\Models\Permission_user;
use App\Http\Requests\StorePermission_userRequest;
use App\Http\Requests\UpdatePermission_userRequest;

class PermissionUserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermission_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermission_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission_user  $permission_user
     * @return \Illuminate\Http\Response
     */
    public function show(Permission_user $permission_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission_user  $permission_user
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission_user $permission_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermission_userRequest  $request
     * @param  \App\Models\Permission_user  $permission_user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermission_userRequest $request, Permission_user $permission_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission_user  $permission_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission_user $permission_user)
    {
        //
    }
}
