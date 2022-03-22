<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\pluss;
use App\Http\Requests\StoreplussRequest;
use App\Http\Requests\UpdateplussRequest;

class PlussController extends Controller
{
    public function index()
    {
        $plusses = pluss::all();
        return response()->json($plusses);
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
    public function store(StoreplussRequest $request)
    {
        $pluss = new pluss();
        $pluss->fill($request->all());
        $pluss->save();
        return response()->json($pluss, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function show(pluss $pluss)
    {
        return response()->json($pluss);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function edit(pluss $pluss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateplussRequest $request, pluss $pluss)
    {
        $pluss->fill($request->all());
        $pluss->save();
        return response()->json($pluss, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        pluss::destroy($id);
        return response()->noContent();
    }
}
