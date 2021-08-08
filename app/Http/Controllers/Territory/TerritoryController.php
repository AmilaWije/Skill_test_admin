<?php

namespace App\Http\Controllers\Territory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use domain\Facades\Zone\ZoneFacade;
use domain\Facades\Region\RegionFacade;
use domain\Facades\Territory\TerritoryFacade;
use App\Http\Controllers\ParentController;

class TerritoryController extends ParentController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['regions'] = RegionFacade::show();
        $response['zones'] = ZoneFacade::show();
        $response['teriitories'] = TerritoryFacade::show();
        return view('Pages.Territory.index')->with($response);
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
        TerritoryFacade::create($request->all());
        $response['alert-success'] = "Territory Create Successfully";
        return redirect()->route('teritories.index')->with($response);
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
        TerritoryFacade::destroy(TerritoryFacade::get($id));
        $response['alert-success'] = "Territory Delete Successfully";
        return redirect()->route('teritories.index')->with($response);
    }
}
