<?php

namespace App\Http\Controllers;

use App\etapa;
use Illuminate\Http\Request;

class etapaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etapa = etapa::all();
        return $etapa;
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
     * @param  \App\etapa  $etapa
     * @return \Illuminate\Http\Response
     */
    public function show(etapa $etapa)
    {
        return $etapa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\etapa  $etapa
     * @return \Illuminate\Http\Response
     */
    public function edit(etapa $etapa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\etapa  $etapa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, etapa $etapa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\etapa  $etapa
     * @return \Illuminate\Http\Response
     */
    public function destroy(etapa $etapa)
    {
        //
    }
}
