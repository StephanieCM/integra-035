<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodo;

class PeriodoController extends Controller
{
    public function index(){

        $periodos = Periodo::all();

        return view('AdmiEncuestas.periodos',compact('periodos'));
    }

    public function store(Request $request){

        $periodo = new Periodo;
        $periodo->nombre = $request->txtNombre;
        $periodo->fechaInicio = $request->txtInicio;
        $periodo->fechaFin = $request->txtFin;
        $periodo->estatus = true;
        $periodo->save();

        return redirect('/periodos')->with('peAdd','true');
    }

    public function update(Request $request){

        //dd($request);
        $update = Periodo::find($request->id);
        $update->nombre = $request->nom;
        $update->fechaInicio = $request->ini;
        $update->fechaFin = $request->fin;
        if($request->estatus == null){
            $update->estatus = false;
        } else {
            $update->estatus = true;
        }
        $update->save();
        
        return redirect('/periodos')->with('peUpd','true');
    }
}
