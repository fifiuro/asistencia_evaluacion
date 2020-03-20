<?php

namespace App\Http\Controllers;

use App\configuracionDepartamento;
use Illuminate\Http\Request;

class departamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departamento/buscar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\configuracionDepartamento  $configuracionDepartamento
     * @return \Illuminate\Http\Response
     */
    public function show(configuracionDepartamento $configuracionDepartamento)
    {
        $departamento = new Departamento;

        
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\configuracionDepartamento  $configuracionDepartamento
     * @return \Illuminate\Http\Response
     */
    public function edit(configuracionDepartamento $configuracionDepartamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\configuracionDepartamento  $configuracionDepartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, configuracionDepartamento $configuracionDepartamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\configuracionDepartamento  $configuracionDepartamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(configuracionDepartamento $configuracionDepartamento)
    {
        //
    }
}
