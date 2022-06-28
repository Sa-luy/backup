<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Models\Staff;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Whoops\Run;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $staffs = Staff::select('*');
        if ($search) {
            $staffs = $staffs->where('fullname', 'like', '%' . $search . '%')->orwhere('id', $search);
        }
        $staffs = $staffs->get();
        return view('staff.index', compact('staffs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffRequest $request)
    {
        $staff = new Staff();
        $staff->fullname = $request->fullname;
        $staff->phone = $request->phone;
        $staff->gender = $request->gender;
        $staff->GroupID = $request->GroupID;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->cccd = $request->cccd;
        $staff->day_of_birth = $request->day_of_birth;
        try {

            $staff->save();
            return redirect()->route('staff.index');
        } catch (\Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('staff.show', ['staff' => Staff::find($staff->id)]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        $id = $staff->id;
        return view('staff.edit', compact('id', 'staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStaffRequest $request, Staff $staff)
    {
        $staff->fullname = $request->fullname;
        $staff->phone = $request->phone;
        $staff->gender = $request->gender;
        $staff->GroupID = $request->GroupID;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->cccd = $request->cccd;
        $staff->day_of_birth = $request->day_of_birth;
        try {

            $staff->save();
            return redirect()->route('staff.index');
        } catch (\Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($staff->id);
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return redirect()->route('staff.index');
    }
}