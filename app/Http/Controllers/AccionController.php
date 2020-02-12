<?php

namespace App\Http\Controllers;

use App\Accion;
use Illuminate\Http\Request;

class AccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acciones = Accion::all();
        return view('Permisos.acciones')->with('acciones',$acciones);
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
     * @param  \App\Accion  $accion
     * @return \Illuminate\Http\Response
     */
    public function show(Accion $accion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function edit(Accion $accion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accion  $accion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Accion $accion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accion  $accion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accion $accion)
    {
        //
    }
}
