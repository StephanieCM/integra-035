<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Dimension;
use App\Dominio;
use App\Pregunta;
use DB;


class AdmiController extends Controller
{
    #carga la vista menu del administrador de preguntas
    public function index(){
        $categoria = Categoria::select('idCategoria','nombre')->get();
        $dimension = Dimension::select('idDimension','nombre')->get();
        $dominio = Dominio::select('idDominio','nombre')->get();
        
        return view('AdmiEncuestas.menu', compact('categoria','dimension','dominio'));
    }
    #carga la vista para buscar,editar o eliminar alguna pregunta.
    public function editarPreguntas(){
        $categoria = Categoria::select('idCategoria','nombre')->get();
        $dimension = Dimension::select('idDimension','nombre')->get();
        $dominio = Dominio::select('idDominio','nombre')->get();
        $preguntas = Pregunta::all();
        
        return view('AdmiEncuestas.gestionPreguntas', compact('categoria','dimension','dominio','preguntas'));
    }
    #funcion para buscar preguntas ya se sea por enuesta, categoria, dominio o dimension
    Public function buscarPreguntas(Request $request){
        $aux =0;
        $sql = 'SELECT * FROM pregunta WHERE';
        if ($request->encuesta != null){
            $aux = 1;
            #dd($request->encuesta);
            $sql = $sql . ' encuesta = ' . $request->encuesta;
        }
        if ($request->categoria != null){
            if ($aux == 1){
                $sql = $sql . ' AND "idCategoria" =' . $request->categoria;
            }else{
                $sql = $sql . ' "idCategoria" = ' . $request->categoria;
                $aux = 1 ;
            }
        }
        if ($request->dominio != null){
            if ($aux == 1){
                $sql = $sql . ' AND "idDominio" =' . $request->dominio;
            }else{
                $sql = $sql . ' "idDominio" =' . $request->dominio;
                $aux = 1 ;
            }
        }
        if ($request->dimension != null){
            if ($aux == 1){
                $sql = $sql . ' AND "idDimnesion" =' . $request->dimension;
            }else{
                $sql = $sql . ' "idDimension" =' . $request->dimension;
            }
        }

        $preguntas = DB::select($sql);
        $categoria = Categoria::select('idCategoria','nombre')->get();
        $dimension = Dimension::select('idDimension','nombre')->get();
        $dominio = Dominio::select('idDominio','nombre')->get();
        
        return view('AdmiEncuestas.gestionPreguntas', compact('categoria','dimension','dominio','preguntas'));
    }

}
