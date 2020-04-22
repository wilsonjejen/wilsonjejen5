<?php

namespace App\Http\Controllers;

use App\ciclista;
use Illuminate\Http\Request;

class ciclistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciclista = ciclista::all();
        return $ciclista;
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
     * @param  \App\ciclista  $ciclista
     * @return \Illuminate\Http\Response
     */
    public function show(ciclista $ciclista)
    {
        return $ciclista;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ciclista  $ciclista
     * @return \Illuminate\Http\Response
     */
    public function edit(cilista $ciclista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ciclista  $cilclista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ciclista $ciclista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ciclista  $ciclista
     * @return \Illuminate\Http\Response
     */
    public function destroy(ciclista $ciclista)
    {
        //
    }
}
