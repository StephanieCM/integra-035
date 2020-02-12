<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    #encunesta 1
    public function indexEncuesta1()
    {
        $fecha = Date('Y-m-d');
        $activo = false;
        $periodo = Periodo::whereMonth('fechaInicio','=',Date('m'))->where('estatus',true)->get();
        if ($periodo != null){
            for($i=0;$i<count($periodo);$i++){
                if (strtotime($fecha) >= strtotime($periodo[$i]->fechaInicio) && strtotime($fecha) <= strtotime($periodo[$i]->fechaFin) ){
                    $activo = true;
                break;
                }
            }
        }
        $seccion2 = false;
        $categoria = DB::table('categoria')
        ->join('pregunta','categoria.idCategoria','=','pregunta.idCategoria')
        ->select('categoria.idCategoria','categoria.nombre')->where('pregunta.encuesta',1)
        ->distinct()->first();

        $answersSection1 = $this->getAnswersByUserEncuesta1($categoria->idCategoria,false);
        if(!empty($answersSection1))
        {
            $valorSection1 = $this->getPonderation($answersSection1);
            if($valorSection1 != 0)
            {
                $seccion2 = true;
            }
        }

        $answerSection2 = $this->getAnswersByUserEncuesta1($categoria->idCategoria,true);
        $contestado = empty($answerSection2) ? false : true;
        #dd($answerSection2, $contestado);
        return view('Encuesta1.menu')->with('seccion2',$seccion2)->with('contestado',$contestado);
    }

    public function seccion1()
    {
        $categoria = DB::table('categoria')
            ->join('pregunta','categoria.idCategoria','=','pregunta.idCategoria')
            ->select('categoria.idCategoria','categoria.nombre')->where('pregunta.encuesta',1)
            ->distinct()->first();
        $answersByUser = $this->getAnswersByUserEncuesta1($categoria->idCategoria,false);
        if($answersByUser->isEmpty())
        {
            $preguntas = DB::table('pregunta')->select('idPregunta','nombre')
                ->where(['encuesta' => 1, 'idCategoria' => $categoria->idCategoria])->get();
            return view('Encuesta1.Seccion1')->with('preguntas',$preguntas)->with('categoria',$categoria);
        }
        else
        {
            return redirect('menu1')->with('msj','true');
        }
    }

    public function seccion2()
    {
        $firstIdCategory = DB::table('categoria')
            ->join('pregunta','categoria.idCategoria','=','pregunta.idCategoria')
            ->select('categoria.idCategoria')->where('pregunta.encuesta',1)
            ->distinct()->value('idCategoria');

        $categories = DB::table('categoria')
            ->join('pregunta','categoria.idCategoria','=','pregunta.idCategoria')
            ->select('categoria.idCategoria','categoria.nombre')->where('pregunta.encuesta',1)
            ->where('pregunta.idCategoria','!=',$firstIdCategory)
            ->distinct()->get();

        $questions = DB::table('pregunta')->select('idPregunta','nombre','idCategoria')
            ->where('encuesta',1)
            ->where('pregunta.idCategoria','!=',$firstIdCategory)
            ->get();
        return view('Encuesta1.Seccion2')->with('questions',$questions)->with('categories',$categories);
    }
    
    public function getPonderation($respuestas)
    {
        $cont = 0;
        foreach($respuestas as $key => $value)
        {
            $idPonderacion = $value['idPonderacion'];
            $valor = DB::table('ponderacion')->where('idPonderacion',$idPonderacion)->value('valor');
            $cont+=$valor;
        }        
        return $cont;
    }

    public function getAnswersByUserEncuesta1($idCategoria, $seccion2)
    {
        if($seccion2)
        {
            $answers = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',1)->where('pregunta.idCategoria','!=',$idCategoria)->toArray();
        }
        else
        {
            $answers = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',1)->where('pregunta.idCategoria',$idCategoria)->toArray();
        }
        return $answers;
    }


    #encuesta 2
    public function indexEncuesta2()
    {
        $sections = $this->getAnswersByUserEncuesta2();
        return view('Encuesta2.menu')->with('secciones',$sections);
    }
    
    public function parte1()
    {
        $questions = Pregunta::select('idPregunta','nombre','folio')->where('encuesta',2)->whereBetween('folio',[1,9])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',2)->whereBetween('folio',[1,9])->get();
            
        return view('Encuesta2.Parte1')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function parte2()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',2)->whereBetween('folio',[10,13])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',2)->whereBetween('pregunta.folio',[10,13])->get();
            
        return view('Encuesta2.Parte2')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function parte3()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',2)->whereBetween('folio',[14,17])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',2)->whereBetween('folio',[14,17])->get();
            
        return view('Encuesta2.Parte3')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function parte4()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',2)->whereBetween('folio',[18,22])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',2)->whereBetween('folio',[18,22])->get();
            
        return view('Encuesta2.Parte4')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function parte5()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',2)->whereBetween('folio',[23,27])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',2)->whereBetween('folio',[23,27])->get();
            
        return view('Encuesta2.Parte5')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function parte6()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',2)->whereBetween('folio',[28,40])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',2)->whereBetween('folio',[28,40])->get();
            
        return view('Encuesta2.Parte6')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function parte7()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',2)->whereBetween('folio',[41,43])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',2)->whereBetween('folio',[41,43])->get();
            
        return view('Encuesta2.Parte7')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function parte8()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',2)->whereBetween('folio',[44,46])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',2)->whereBetween('folio',[44,46])->get();
            
        return view('Encuesta2.Parte8')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function getAnswersByUserEncuesta2()
    {
        $arraySections = array();

        $parte1 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',2)
            ->whereBetween('pregunta.folio',[1,9])->toArray();
        if(empty($parte1))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);

        $parte2 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',2)
            ->whereBetween('pregunta.folio',[10,13])->toArray();
        if(empty($parte2))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte3 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',2)
            ->whereBetween('pregunta.folio',[14,17])->toArray();
        if(empty($parte3))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);

        $parte4 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',2)
            ->whereBetween('pregunta.folio',[18,22])->toArray();
        if(empty($parte4))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte5 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',2)
            ->whereBetween('pregunta.folio',[23,27])->toArray();
        if(empty($parte5))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte6 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',2)
            ->whereBetween('pregunta.folio',[28,40])->toArray();
        if(empty($parte6))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte7 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',2)
        ->whereBetween('pregunta.folio',[41,43])->toArray();
        if(empty($parte7))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte8 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',2)
        ->whereBetween('pregunta.folio',[44,46])->toArray();
        if(empty($parte8))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        return $arraySections;
    }

    #encuesta 3
    public function indexEncuesta3()
    {
        $sections = $this->getAnswersByUserEncuesta3();
        return view('Encuesta3.menu')->with('secciones',$sections);
    } 
    
    public function p1()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[1,5])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[1,5])->get();
            
        return view('Encuesta3.parte1')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p2()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[6,8])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[6,8])->get();
            
        return view('Encuesta3.parte2')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p3()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[9,12])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[9,12])->get();
            
        return view('Encuesta3.parte3')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p4()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[13,16])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[13,16])->get();
            
        return view('Encuesta3.parte4')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p5()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[17,22])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[17,22])->get();
            
        return view('Encuesta3.parte5')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p6()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[23,28])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[23,28])->get();
            
        return view('Encuesta3.parte6')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p7()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[29,30])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[29,30])->get();
            
        return view('Encuesta3.parte7')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p8()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[31,36])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[31,36])->get();
            
        return view('Encuesta3.parte8')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p9()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[37,41])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[37,41])->get();
            
        return view('Encuesta3.parte9')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p10()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[42,46])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[42,46])->get();
            
        return view('Encuesta3.parte10')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p11()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[47,56])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[47,56])->get();
            
        return view('Encuesta3.parte11')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p12()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[57,64])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[57,64])->get();
            
        return view('Encuesta3.parte12')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p13()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[65,68])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[65,68])->get();
            
        return view('Encuesta3.parte13')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }

    public function p14()
    {
        $questions = DB::table('pregunta')->select('idPregunta','nombre','folio')
            ->where('encuesta',3)->whereBetween('folio',[69,72])->get();
        $ponderaciones = DB::table('ponderacion')
            ->join('pregunta','ponderacion.idPregunta','=','pregunta.idPregunta')
            ->select('ponderacion.idPonderacion','ponderacion.respuesta','ponderacion.idPregunta')
            ->where('encuesta',3)->whereBetween('folio',[69,72])->get();
            
        return view('Encuesta3.parte14')->with('questions',$questions)->with('ponderaciones',$ponderaciones);
    }
    
    public function getAnswersByUserEncuesta3()
    {
        $arraySections = array();

        $parte1 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[1,5])->toArray();
        if(empty($parte1))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);

        $parte2 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[6,8])->toArray();
        if(empty($parte2))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte3 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[9,12])->toArray();
        if(empty($parte3))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);

        $parte4 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[13,16])->toArray();
        if(empty($parte4))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte5 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[17,22])->toArray();
        if(empty($parte5))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte6 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[23,28])->toArray();
        if(empty($parte6))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte7 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[29,30])->toArray();
        if(empty($parte7))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte8 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[31,36])->toArray();
        if(empty($parte8))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        $parte9 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[37,41])->toArray();
        if(empty($parte9))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);

        $parte10 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[42,46])->toArray();
        if(empty($parte10))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);

        $parte11 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[47,56])->toArray();
        if(empty($parte11))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);

        $parte12 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[57,64])->toArray();
        if(empty($parte12))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);

        $parte13 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[65,68])->toArray();
        if(empty($parte13))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);

        $parte14 = Auth::user()->preguntasUsuarios->where('pregunta.encuesta',3)
            ->whereBetween('pregunta.folio',[69,72])->toArray();
        if(empty($parte14))
            array_push($arraySections,false);
        else
            array_push($arraySections,true);
        
        return $arraySections;   
    }
}
