<?php

use Illuminate\Database\Seeder;

class EncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tabla pregunta
        DB::table('pregunta')->insert([
        	'idPregunta'=> '1',
        	'nombre' => '¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguientes: ¿Accidente que tenga como consecuencia la muerte, pérdida de un miembro  o una lesión grave?, Asaltos?, Actos violentos que derivaron en lesiones graves?, Secuestro?, Amenazas?, Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?',
                'encuesta' => '1',
                'idCategoria' => '1',
                'estatus' => '1',
        ]);   
         DB::table('pregunta')->insert([
        	'idPregunta'=> '2',
        	'nombre' => '¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?',
                'encuesta' => '1',
                'idCategoria' => '2',
                'estatus' => '1',
        ]);
          DB::table('pregunta')->insert([
        	'idPregunta'=> '3',
        	'nombre' => '¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?',
                'encuesta' => '1',
                'idCategoria' => '2',
                'estatus' => '1',
        ]);   
           DB::table('pregunta')->insert([
        	'idPregunta'=> '4',
        	'nombre' => '¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?',
                'encuesta' => '1',
                'idCategoria' => '3',
                'estatus' => '1',
        ]);   
            DB::table('pregunta')->insert([
        	'idPregunta'=> '5',
        	'nombre' => '¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan recuerdos del acontecimiento?',
                'encuesta' => '1',
                'idCategoria' => '3',
                'estatus' => '1',
        ]);   
             DB::table('pregunta')->insert([
        	'idPregunta'=> '6',
        	'nombre' => '¿Ha tenido dificultad para recordar alguna parte importante del evento?',
                'encuesta' => '1',
                'idCategoria' => '3',
                'estatus' => '1',
        ]);   
              DB::table('pregunta')->insert([
        	'idPregunta'=> '7',
        	'nombre' => '¿Ha disminuido su interés en sus actividades cotidianas?',
                'encuesta' => '1',
                'idCategoria' => '3',
                'estatus' => '1',
        ]);   
               DB::table('pregunta')->insert([
        	'idPregunta'=> '8',
        	'nombre' => '¿Se ha sentido usted alejado o distante de los demás?',
                'encuesta' => '1',
                'idCategoria' => '3',
                'estatus' => '1',
        ]);   
        DB::table('pregunta')->insert([
        	'idPregunta'=> '9',
        	'nombre' => '¿Ha notado que tiene dificultad para expresar sus sentimientos?',
                'encuesta' => '1',
                'idCategoria' => '3',
                'estatus' => '1',
        ]);   
        DB::table('pregunta')->insert([
        	'idPregunta'=> '10',
        	'nombre' => '¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tiene un futuro limitado?',
                'encuesta' => '1',
                'idCategoria' => '3',
                'estatus' => '1',
        ]);       
        DB::table('pregunta')->insert([
        	'idPregunta'=> '11',
        	'nombre' => '¿Ha tenido usted dificultades para dormir?',
                'encuesta' => '1',
                'idCategoria' => '4',
                'estatus' => '1',
        ]); 
        DB::table('pregunta')->insert([
        	'idPregunta'=> '12',
        	'nombre' => '¿Ha estado particularmente irritable o le han dado arranques de coraje?',
                'encuesta' => '1',
                'idCategoria' => '4',
                'estatus' => '1',
        ]);  
                DB::table('pregunta')->insert([
        	'idPregunta'=> '13',
        	'nombre' => '¿Ha tenido dificultad para concentrarse?',
                'encuesta' => '1',
                'idCategoria' => '4',
                'estatus' => '1',
        ]);  
        DB::table('pregunta')->insert([
        	'idPregunta'=> '14',
        	'nombre' => '¿Ha estado nervioso o constantemente en alerta?',
                'encuesta' => '1',
                'idCategoria' => '4',
                'estatus' => '1',
        ]);  
        DB::table('pregunta')->insert([
        	'idPregunta'=> '15',
        	'nombre' => '¿Se ha sobresaltado fácilmente por cualquier cosa?',
                'encuesta' => '1',
                'idCategoria' => '4',
                'estatus' => '1',
        ]);  
        //KAREN ENCUESTA 2
       DB::table('pregunta')->insert([
                'idPregunta'=> '16',
        	'nombre' => 'Mi trabajo me exige hacer mucho esfuerzo físico',
                'encuesta' => '2',
                'folio' => '1',
                'idCategoria' => '6',
                'estatus' => '1',
        ]); 
        DB::table('pregunta')->insert([
                'idPregunta'=> '17',
        	'nombre' => 'Me preocupa sufrir un accidente en mi trabajo',
                'encuesta' => '2',
                'folio' => '2',
                'idCategoria' => '6',
                'estatus' => '1',
        ]); 
        DB::table('pregunta')->insert([
                'idPregunta'=> '18',
        	'nombre' => 'Considero que las actividades que realizo son religrosas',
                'encuesta' => '2',
                'folio' => '3',
                'idCategoria' => '6',
                'estatus' => '1',
        ]); 
        DB::table('pregunta')->insert([
                'idPregunta'=> '19',
        	'nombre' => 'Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno',
                'encuesta' => '2',
                'folio' => '4',
                'idCategoria' => '5',
                'estatus' => '1',
        ]); 
        DB::table('pregunta')->insert([
                'idPregunta'=> '20',
        	'nombre' => 'Por la cantidad de trabajo que tengo debo trabajar sin parar',
                'encuesta' => '2',
                'folio' => '5',
                'idCategoria' => '5',
                'estatus' => '1',
        ]); 
        DB::table('pregunta')->insert([
                'idPregunta'=> '21',
        	'nombre' => 'Considero que es necesario mantener un ritmo de trabajo acelerado',
                'encuesta' => '2',
                'folio' => '6',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '22',
        	'nombre' => 'Mi trabajo exige que esté muy concentrado',
                'encuesta' => '2',
                'folio' => '7',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);  
        DB::table('pregunta')->insert([
                'idPregunta'=> '23',
        	'nombre' => 'Mi trabajo requiere que memorice mucha información',
                'encuesta' => '2',
                'folio' => '8',
                'idCategoria' => '5',
                'estatus' => '1',
        ]); 
        DB::table('pregunta')->insert([
                'idPregunta'=> '24',
        	'nombre' => 'Mi trabajo exige que atienda varios asuntos al mismo tiempo',
                'encuesta' => '2',
                'folio' => '9',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '25',
        	'nombre' => 'En mi trabajo soy responsable de cosas de mucho valor',
                'encuesta' => '2',
                'folio' => '10',
                'idCategoria' => '5',
                'estatus' => '1',
        ]); 
        DB::table('pregunta')->insert([
                'idPregunta'=> '26',
        	'nombre' => 'Respondo ante mi jefe por los resultados de toda mi área de trabajo',
                'encuesta' => '2',
                'folio' => '11',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '27',
        	'nombre' => 'En mi trabajo me dan órdenes contradictorias',
                'encuesta' => '2',
                'folio' => '12',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '28',
        	'nombre' => 'Considero que en mi trabajo me piden hacer cosas innecesarias',
                'encuesta' => '2',
                'folio' => '13',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '29',
        	'nombre' => 'Trabajo horas extras más de tres veces a la semana',
                'encuesta' => '2',
                'folio' => '14',
                'idCategoria' => '7',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '30',
        	'nombre' => 'Mi trabajo me exige laborar en días de descanso, festivos o fines de semana',
                'encuesta' => '2',
                'folio' => '15',
                'idCategoria' => '7',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '31',
        	'nombre' => 'MConsidero que el timepo en el trabajo es mucho y perjudica mis actividades familiares o personales',
                'encuesta' => '2',
                'folio' => '16',
                'idCategoria' => '7',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '32',
        	'nombre' => 'Pienso en las actividades familiares o personales cuando estoy en mi trabajo',
                'encuesta' => '2',
                'folio' => '17',
                'idCategoria' => '7',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '33',
        	'nombre' => 'Mi trabajo permite que desarrolle nuevas habilidades',
                'encuesta' => '2',
                'folio' => '18',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '34',
        	'nombre' => 'En mi trabajo puedo aspirar a un mejor puesto',
                'encuesta' => '2',
                'folio' => '19',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '35',
        	'nombre' => 'Durante mi jornada de trabajo puedo tomar pausas cuando es necesario',
                'encuesta' => '2',
                'folio' => '20',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '36',
        	'nombre' => 'Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo',
                'encuesta' => '2',
                'folio' => '21',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '37',
        	'nombre' => 'Puedo cambiar el orden de las actividades que realizo en mi trabajo',
                'encuesta' => '2',
                'folio' => '22',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '38',
        	'nombre' => 'Me informan con claridad cuáles son mis funciones',
                'encuesta' => '2',
                'folio' => '23',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '39',
        	'nombre' => 'Me explican claramente los resultado que debo obtener en mi trabajo',
                'encuesta' => '2',
                'folio' => '24',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '40',
        	'nombre' => 'Me informan con quién puedo resolver problemas o asuntos de trabajo',
                'encuesta' => '2',
                'folio' => '25',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '41',
        	'nombre' => 'Me permiten asistir a capacitaciones relacionadas con mi trabajo',
                'encuesta' => '2',
                'folio' => '26',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '42',
        	'nombre' => 'Recibo capacitación útil para hacer mi trabajo',
                'encuesta' => '2',
                'folio' => '27',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '43',
        	'nombre' => 'Mi jefe tiene en cuenta mis puntos de vita y opiniones',
                'encuesta' => '2',
                'folio' => '28',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '44',
        	'nombre' => 'Mi jefe ayuda a solucionar los porblemas que se presentan en el trabajo',
                'encuesta' => '2',
                'folio' => '29',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '45',
        	'nombre' => 'Puedo confiar en mis compañeros de trabajo',
                'encuesta' => '2',
                'folio' => '30',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '46',
        	'nombre' => 'Cuando tenemos que realizar trabajo de equipo los compañeros colaboran',
                'encuesta' => '2',
                'folio' => '31',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '47',
        	'nombre' => 'Mis compañeros de trabajo me ayudan cuando tengo dificultades',
                'encuesta' => '2',
                'folio' => '32',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '48',
        	'nombre' => 'En mi trabajo puedo expresarme libremente sin interrupciones',
                'encuesta' => '2',
                'folio' => '33',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '49',
        	'nombre' => 'Recibo críticas constantes a mi persona y/o trabajo',
                'encuesta' => '2',
                'folio' => '34',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '50',
        	'nombre' => 'Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones',
                'encuesta' => '2',
                'folio' => '35',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '51',
        	'nombre' => 'Se ignora mi presencia o se me excluye de las reuniones de tabajo y en la toma de decisiones',
                'encuesta' => '2',
                'folio' => '36',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '52',
        	'nombre' => 'Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador',
                'encuesta' => '2',
                'folio' => '37',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '53',
        	'nombre' => 'Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores',
                'encuesta' => '2',
                'folio' => '38',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '54',
        	'nombre' => 'Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo',
                'encuesta' => '2',
                'folio' => '39',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '55',
        	'nombre' => 'He presenciado actos de violencia en mi centro de trabajo',
                'encuesta' => '2',
                'folio' => '40',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '56',
        	'nombre' => 'Atiendo clientes o usuarios muy enojados',
                'encuesta' => '2',
                'folio' => '41',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '57',
        	'nombre' => 'Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas',
                'encuesta' => '2',
                'folio' => '42',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '58',
        	'nombre' => 'Para hacer mi trabajo debo demostrar sentimientos distintos a los míos',
                'encuesta' => '2',
                'folio' => '43',
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '59',
        	'nombre' => 'Comunican tarde los asusntos de trabajo',
                'encuesta' => '2',
                'folio' => '44',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '60',
        	'nombre' => 'Dificultan el logro de los resultados del trabajo',
                'encuesta' => '2',
                'folio' => '45',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '61',
        	'nombre' => 'Ignoran las sugerencias para mejorar su trabajo',
                'encuesta' => '2',
                'folio' => '46',
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        $folio=0;
        // ENCUESTA DAVID
        /* Ambiente laboral */
        DB::table('pregunta')->insert([
        	'idPregunta'=> '62',
        	'nombre' => 'El espacio donde trabajo me permite realizar mis actividades de manera segura e higienica',
                'encuesta' => '3',
                'folio' => $folio++,
                'idCategoria' => '6',
                'estatus' => '1',
        ]); 
        DB::table('pregunta')->insert([
        	'idPregunta'=> '63',
        	'nombre' => 'Mi trabajo me exige hacer mucho esfuerzo fisico',
                'encuesta' => '3',
                'folio' => $folio++,
                'idCategoria' => '6',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
        	'idPregunta'=> '64',
        	'nombre' => 'Me preocupa sufrir un accidente en mi trabajo',
                'encuesta' => '3',
                'folio' => $folio++,
                'idCategoria' => '6',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
        	'idPregunta'=> '65',
        	'nombre' => 'Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '6',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
        	'idPregunta'=> '66',
        	'nombre' => 'Considero que las actividades que realizo son peligrosas',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '6',
                'estatus' => '1',
        ]);

        /* Factores propios de la actividad */
        DB::table('pregunta')->insert([
        	'idPregunta'=> '67',
        	'nombre' => 'Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
        	'idPregunta'=> '68',
        	'nombre' => 'Por la cantidad de trabajo que tengo debo trabajar sin parar',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
        	'idPregunta'=> '69',
        	'nombre' => 'Considero que es necesario mantener un ritmo de trabajo acelerado',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
        	'idPregunta'=> '70',
        	'nombre' => 'Mi trabajo exige que esté muy concentrado',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
        	'idPregunta'=> '71',
        	'nombre' => 'Mi trabajo requiere que memorice mucha información',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
        	'idPregunta'=> '72',
        	'nombre' => 'En mi trabajo tengo que tomar decisiones difíciles muy rápido',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
        	'idPregunta'=> '73',
        	'nombre' => 'Mi trabajo exige que atienda varios asuntos al mismo tiempo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
        	'idPregunta'=> '74',
        	'nombre' => 'En mi trabajo soy responsable de cosas de mucho valor',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '75',
                'nombre' => 'Respondo ante mi jefe por los resultados de toda mi área de trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '76',
                'nombre' => 'En el trabajo me dan órdenes contradictorias',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '77',
                'nombre' => 'Considero que en mi trabajo me piden hacer cosas innecesarias',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        /* Organizacion del tiempo de trabajo */
        DB::table('pregunta')->insert([
                'idPregunta'=> '78',
                'nombre' => 'Trabajo horas extras más de tres veces a la semana',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '7',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '79',
                'nombre' => 'Mi trabajo me exige laborar en días de descanso, festivos o fines de semana',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '7',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '80',
                'nombre' => 'Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '7',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '81',
                'nombre' => 'Debo atender asuntos de trabajo cuando estoy en casa',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '7',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '82',
                'nombre' => 'Pienso en las actividades familiares o personales cuando estoy en mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '7',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '83',
                'nombre' => 'Pienso que mis responsabilidades familiares afectan mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '7',
                'estatus' => '1',
        ]);
        /* Factores propios de la actividad */
        DB::table('pregunta')->insert([
                'idPregunta'=> '84',
                'nombre' => 'Mi trabajo permite que desarrolle nuevas habilidades',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '85',
                'nombre' => 'En mi trabajo puedo aspirar a un mejor puesto',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '86',
                'nombre' => 'Durante mi jornada de trabajo puedo tomar pausas cuando las necesito',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '87',
                'nombre' => 'Puedo decidir cuánto trabajo realizo durante la jornada laboral',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '88',
                'nombre' => 'Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '89',
                'nombre' => 'Puedo cambiar el orden de las actividades que realizo en mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '90',
                'nombre' => 'Los cambios que se presentan en mi trabajo dificultan mi labor',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '91',
                'nombre' => 'Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        /* Liderazgo y relaciones en el trabajo */
        DB::table('pregunta')->insert([
                'idPregunta'=> '92',
                'nombre' => 'Me informan con claridad cuáles son mis funciones',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '93',
                'nombre' => 'Me explican claramente los resultados que debo obtener en mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '94',
                'nombre' => 'Me explican claramente los objetivos de mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '95',
                'nombre' => 'Me informan con quién puedo resolver problemas o asuntos de trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        /* Factores propios de la actividad */
        DB::table('pregunta')->insert([
                'idPregunta'=> '96',
                'nombre' => 'Me permiten asistir a capacitaciones relacionadas con mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '97',
                'nombre' => 'Recibo capacitacion útil para hacer mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        /* Liderazgo y relaciones en el trabajo */
        DB::table('pregunta')->insert([
                'idPregunta'=> '98',
                'nombre' => 'Mi jefe ayuda a organizar mejor el trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '99',
                'nombre' => 'Mi jefe tiene en cuenta mis puntos de vista y opiniones',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '100',
                'nombre' => 'Mi jefe me comunica a tiempo la información relacionada con el trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '101',
                'nombre' => 'La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '102',
                'nombre' => 'Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '103',
                'nombre' => 'Puedo confiar en mis compañeros de trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '104',
                'nombre' => 'Entre compañeros solucionamos los problemas de trabajo de forma respetuosa',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '105',
                'nombre' => 'En mi trabajo me hacen sentir parte del grupo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '106',
                'nombre' => 'Cuando tenemos que realizar trabajo de equipo los compañeros colaboran',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '107',
                'nombre' => 'Mis compañeros de trabajo me ayudan cuando tengo dificultades',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        /* entorno organizacional */
        DB::table('pregunta')->insert([
                'idPregunta'=> '108',
                'nombre' => 'Me informan sobre lo que hago bien en mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '9',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '109',
                'nombre' => 'La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi desempeño',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '9',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '110',
                'nombre' => 'En mi centro de trabajo me pagan a tiempo mi salario',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '9',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '111',
                'nombre' => 'El pago que recibo es el que merezco por el trabajo que realizo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '9',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '112',
                'nombre' => 'Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '9',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '113',
                'nombre' => 'Las personas que hacen bien el trabajo pueden crecer laboralmente',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '9',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '114',
                'nombre' => 'Considero que mi trabajo es estable',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '9',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '115',
                'nombre' => 'En mi trabajo existe continua rotación de persona',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '9',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '116',
                'nombre' => 'Siento orgullo de laborar en este centro de trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '9',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '117',
                'nombre' => 'Me siento comprometido con mi trabajo ',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '9',
                'estatus' => '1',
        ]);
        /* Liderazgo y relaciones en el trabajo */
        DB::table('pregunta')->insert([
                'idPregunta'=> '118',
                'nombre' => 'En mi trabajo puedo expresarme libremente sin interrupciones',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '119',
                'nombre' => 'Recibo críticas constantes a mi persona y/o trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '120',
                'nombre' => 'Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '121',
                'nombre' => 'Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '122',
                'nombre' => 'Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '123',
                'nombre' => 'Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '124',
                'nombre' => 'Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '125',
                'nombre' => 'He presenciado actos de violencia en mi centro de trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        /* Factores propios de la actividad */
        DB::table('pregunta')->insert([
                'idPregunta'=> '126',
                'nombre' => 'Atiendo clientes o usuarios muy enojados',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '127',
                'nombre' => 'Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '128',
                'nombre' => 'Para hacer mi trabajo debo demostrar sentimientos distintos a los míos',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '129',
                'nombre' => 'Mi trabajo me exige atender situaciones de violencia',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '5',
                'estatus' => '1',
        ]);
        /* Liderazgo y relaciones en el trabajo */
        DB::table('pregunta')->insert([
                'idPregunta'=> '130',
                'nombre' => 'Comunican tarde los asuntos de trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '131',
                'nombre' => 'Dificultan el logro de los resultados del trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '132',
                'nombre' => 'Cooperan poco cuando se necesita',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
        DB::table('pregunta')->insert([
                'idPregunta'=> '133',
                'nombre' => 'Ignoran las sugerencias para mejorar su trabajo',
                'encuesta' => '3',  
                'folio' => $folio++,
                'idCategoria' => '8',
                'estatus' => '1',
        ]);
    }
}
