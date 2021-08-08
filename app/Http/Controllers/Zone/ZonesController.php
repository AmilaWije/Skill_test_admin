<?php

namespace App\Http\Controllers\Zone;

use App\Http\Controllers\Controller;
use domain\Facades\Zone\ZoneFacade;
use Illuminate\Http\Request;
use App\Http\Controllers\ParentController;

class ZonesController extends ParentController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['zones'] = ZoneFacade::show();
        return view('Pages.Zone.index')->with($response);
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
        ZoneFacade::create($request->all());
        $response['alert-success'] = "Zone Create Successfully";
        return redirect()->route('zones.index')->with($response);
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

    public function delete($id)
    {
        ZoneFacade::destroy(ZoneFacade::get($id));
        $response['alert-success'] = "Zone Delete Successfully";
        return redirect()->route('zones.index')->with($response);
    }
}
