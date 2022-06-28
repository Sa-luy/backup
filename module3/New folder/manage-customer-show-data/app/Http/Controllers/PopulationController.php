<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PopulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $populations = [
            '0' => [
                'id' => 1,
                'name' => 'customer1',
                'bod' => '1998-09-01',
                'email' => 'customer1@gmail.com'
            ],

            '1' => [
                'id' => 2,
                'name' => 'customer2',
                'bod' => '1998-09-01',
                'email' => 'customer2@gmail.com'
            ],

            '2' => [
                'id' => 3,
                'name' => 'customer3',
                'bod' => '1998-09-01',
                'email' => 'customer3@gmail.com'
            ]
        ];
        return view('population.list', compact('populations'));
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