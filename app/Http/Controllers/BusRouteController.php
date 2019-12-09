<?php

namespace App\Http\Controllers;

use App\Model\BusRoute;
use Illuminate\Http\Request;
use DB;

class BusRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response([
            'busroutes'=>DB::table('bus_route')->get()
        ]);
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
     * @param  \App\Model\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    
        return response([
            'busroute'=> BusRoute::find($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function edit(BusRoute $busRoute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusRoute $busRoute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusRoute $busRoute)
    {
        //
    }
}
