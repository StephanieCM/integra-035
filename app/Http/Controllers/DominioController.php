<?php

namespace App\Http\Controllers;

use App\Dominio;
use Illuminate\Http\Request;

class DominioController extends Controller
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
        $dominio = new Dominio;
        $dominio->nombre = $request->txtNombre;
        $dominio->save();

        return redirect('admi')->with('msj','true');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dominio  $dominio
     * @return \Illuminate\Http\Response
     */
    public function show(Dominio $dominio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dominio  $dominio
     * @return \Illuminate\Http\Response
     */
    public function edit(Dominio $dominio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dominio  $dominio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dominio $dominio)
    {
        $acualizar = $dominio::find($request->sDominio)->update(['nombre'=>$request->txtNombre]);
        return redirect('admi')->with('msj','true');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dominio  $dominio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Dominio $dominio)
    {
        $eliminar = $dominio::find($request->sDominio)->delete();
        return redirect('admi')->with('msj','true');
    
    }
}
