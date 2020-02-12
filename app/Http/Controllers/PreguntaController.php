<?php

namespace App\Http\Controllers;

use App\Pregunta;
use App\Ponderacion;
use App\Categoria;
use App\Dominio;
use App\Dimension;
use DB;

use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pregunta = Pregunta::where('idPregunta', '=' ,$request->idPregunta)->first();
        $catPre = Categoria::where('idCategoria','=',$pregunta->idCategoria)->first();
        $domPre = Dominio::where('idDominio','=',$pregunta->idDominio)->first();
        $dimPre = Dimension::where('idDimension','=',$pregunta->idDimension)->first();
        $ponderacion =Ponderacion::where('idPregunta', '=', $request->idPregunta)->get();
        $categoria = Categoria::select('idCategoria','nombre')->get();
        $dimension = Dimension::select('idDimension','nombre')->get();
        $dominio = Dominio::select('idDominio','nombre')->get();
        #dd($ponderacion);
        return view('AdmiEncuestas.editarPregunta',compact('pregunta','ponderacion','categoria','dimension','dominio','catPre','domPre','dimPre'));
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
        
        $pregunta = new Pregunta;
        $pregunta->nombre = $request->nomPre;
        $pregunta->folio = $request->folio;
        $pregunta->encuesta = $request->sEncuesta;
        $pregunta->estatus = true;
        $pregunta->idCategoria = $request->sCategoria;
        $pregunta->idDominio = $request->sDominio;
        $pregunta->idDimension = $request->sDimension;
        $pregunta->save();
    
        for($i=0;$i<count($request->nombres);$i++){
            $ponderacion = new Ponderacion;
            $ponderacion->idPregunta =$pregunta->idPregunta;
            $ponderacion->respuesta = $request->nombres[$i];
            $ponderacion->valor = $request->ponderacion[$i];
            $ponderacion->save();
        }

        return redirect('admi')->with('msjp','true');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregunta $pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pregunta $pregunta)
    {
        #dd($request->nombres);
        $acualizar = $pregunta::find($request->idPregunta);
        $acualizar->nombre = $request->nomPre;
        $acualizar->folio  = $request->folio;
        $acualizar->encuesta = $request->sEncuesta;
        if ($request->estatus == null){
            $acualizar->estatus = false;
        }else{
            $acualizar->estatus = true;
        }
        $acualizar->idCategoria = $request->sCategoria;
        $acualizar->idDominio = $request->sDominio;
        $acualizar->idDimension = $request->sDimension;
        $acualizar->save();

        if ($request->nombres[0] != null){
            if ($request->idRes == null){ #no existe ninguna respuesta , se agregan
                for ($i=0; $i < count($request->nombres) ; $i++){
                    $nueva = new Ponderacion;
                    $nueva->idPregunta = $acualizar->idPregunta;
                    $nueva->respuesta = $request->nombres[$i];
                    $nueva->valor = $request->ponderacion[$i];
                    $nueva->save();
                }
            } else{
                if ($request->borrar == null){#si existen respuestas, pero ninguna se va a borrar, se editan o agregan 
                    for ($i=0; $i < count($request->nombres) ; $i++) {
                        if ($i < count($request->idRes)){
                            $respuesta = Ponderacion::where('idPonderacion','=',$request->idRes[$i])->first();      
                            $respuesta->respuesta = $request->nombres[$i];
                            $respuesta->valor = $request->ponderacion[$i];
                            $respuesta->save();
                        } else {
                            $nueva = new Ponderacion;
                            $nueva->idPregunta = $acualizar->idPregunta;
                            $nueva->respuesta = $request->nombres[$i];
                            $nueva->valor = $request->ponderacion[$i];
                            $nueva->save();
                        }
                    }
                } else { #si existen respuestas y se editan, agregan o borran
                    for ($i=0; $i < count($request->nombres) ; $i++) {
                        if ($i < count($request->idRes)){
                            $respuesta = Ponderacion::where('idPonderacion','=',$request->idRes[$i])->first();      
                            $respuesta->respuesta = $request->nombres[$i];
                            $respuesta->valor = $request->ponderacion[$i];
                            $respuesta->save();
                        } else {
                            $nueva = new Ponderacion;
                            $nueva->idPregunta = $acualizar->idPregunta;
                            $nueva->respuesta = $request->nombres[$i];
                            $nueva->valor = $request->ponderacion[$i];
                            $nueva->save();
                        }
                    }
                    for ($i=0; $i <count($request->borrar); $i++) {
                        $borrar = Ponderacion::where('idPonderacion','=',$request->borrar[$i])->delete();
                    }
                }
            }
        }

        return redirect('gestion')->with('update','true');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregunta $pregunta)
    {
        //
    }

    public function Seccion1()
    {
        
        $preguntas = DB::table('pregunta')->select('idPregunta','nombre')->where('encuesta', 1)->get();
        return view('Encuesta1.Seccion1')->with('preguntas',$preguntas);
    }
}
