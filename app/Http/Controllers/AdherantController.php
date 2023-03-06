<?php

namespace App\Http\Controllers;

use App\Models\Adherant;
use App\Http\Requests\StoreAdherantRequest;
use App\Http\Requests\UpdateAdherantRequest;

class AdherantController extends Controller
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
     * @param  \App\Http\Requests\StoreAdherantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdherantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adherant  $adherant
     * @return \Illuminate\Http\Response
     */
    public function show(Adherant $adherant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adherant  $adherant
     * @return \Illuminate\Http\Response
     */
    public function edit(Adherant $adherant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdherantRequest  $request
     * @param  \App\Models\Adherant  $adherant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdherantRequest $request, Adherant $adherant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adherant  $adherant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adherant $adherant)
    {
        //
    }
}
