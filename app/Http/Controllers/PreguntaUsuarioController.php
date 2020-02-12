<?php

namespace App\Http\Controllers;

use App\preguntaUsuario;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreguntaUsuarioController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $answers = $request->except('_token');
        foreach ($answers as $key => $value) 
        {
            $idPonderacion = DB::table('ponderacion')
                ->where(['idPregunta' => $key, 'respuesta' => $value])->value('idPonderacion');
            $respuesta = new preguntaUsuario;
            $respuesta->idUsuario = Auth::user()->idUsuario;
            $respuesta->idPregunta = $key;
            $respuesta->idPonderacion = $idPonderacion;
            $respuesta->fecha = Carbon::now();
            $respuesta->save();
        }
        return redirect ('menu1');   
    }

    public function storeEncuesta2(Request $request)
    {
        $answers = $request->except('_token');
        foreach($answers as $idPregunta => $idPonderacion)
        {
            $respuesta = new preguntaUsuario;
            $respuesta->idUsuario = Auth::user()->idUsuario;
            $respuesta->idPregunta = $idPregunta;
            $respuesta->idPonderacion = (integer)$idPonderacion;
            $respuesta->fecha = Carbon::now();
            $respuesta->save();
        }
        return redirect('menu2');
    }

    public function saveEncuesta2(Request $request)
    {
        if($request->clientesJefes == 1)
        {
            $answers = $request->except('_token','clientesJefes');
            foreach($answers as $idPregunta => $idPonderacion)
            {
                $respuesta = new preguntaUsuario;
                $respuesta->idUsuario = Auth::user()->idUsuario;
                $respuesta->idPregunta = $idPregunta;
                $respuesta->idPonderacion = (integer)$idPonderacion;
                $respuesta->fecha = Carbon::now();
                $respuesta->save();
            }
        }
        return redirect('menu2');
    }

    public function storeEncuesta3(Request $request)
    {
        $answers = $request->except('_token');
        foreach($answers as $idPregunta => $idPonderacion)
        {
            $respuesta = new preguntaUsuario;
            $respuesta->idUsuario = Auth::user()->idUsuario;
            $respuesta->idPregunta = $idPregunta;
            $respuesta->idPonderacion = (integer)$idPonderacion;
            $respuesta->fecha = Carbon::now();
            $respuesta->save();
        }
        return redirect('menu3');
    }

    public function saveEncuesta3(Request $request)
    {
        if($request->clientesJefes == 1)
        {
            $answers = $request->except('_token','clientesJefes');
            foreach($answers as $idPregunta => $idPonderacion)
            {
                $respuesta = new preguntaUsuario;
                $respuesta->idUsuario = Auth::user()->idUsuario;
                $respuesta->idPregunta = $idPregunta;
                $respuesta->idPonderacion = (integer)$idPonderacion;
                $respuesta->fecha = Carbon::now();
                $respuesta->save();
            }
        }
        return redirect('menu3');
    }
}