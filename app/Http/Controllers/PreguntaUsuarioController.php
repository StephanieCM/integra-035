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
        $arr = $request->except('_token');
        //$arrayAnswers = array();

        foreach ($arr as $key => $value) 
        {
            $idPonderacion = DB::table('ponderacion')
            ->where(['idPregunta' => $key, 'respuesta' => $value])->value('idPonderacion');

            $respuesta = new preguntaUsuario;
            $respuesta->idUsuario = Auth::user()->idUsuario;
            $respuesta->idPregunta = $key;
            $respuesta->idPonderacion = $idPonderacion;
            $respuesta->fecha = Carbon::now();
            $respuesta->save();
            //$respuesta->created_at = Carbon::now()->toDateTimeString();

            //array_push($arrayAnswers,$respuesta);
        }
        return redirect('/');
        //dd($arrayAnswers);
        
    }
}
