<?php

namespace App\Http\Controllers;

use App\Dimension;
use Illuminate\Http\Request;

class DimensionController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dimension = new Dimension;
        $dimension->nombre = $request->txtNombre;
        $dimension->save();

        return redirect('admi')->with('msj','true');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dimension  $dimension
     * @return \Illuminate\Http\Response
     */
    public function show(Dimension $dimension)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dimension  $dimension
     * @return \Illuminate\Http\Response
     */
    public function edit(Dimension $dimension)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dimension  $dimension
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dimension $dimension)
    {
        $acualizar = $dimension::find($request->sDimension)->update(['nombre'=>$request->txtNombre]);
        return redirect('admi')->with('msj','true');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dimension  $dimension
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Dimension $dimension)
    {
        $eliminar = $dimension::find($request->sDimension)->delete();
        return redirect('admi')->with('msj','true');
    }
}
