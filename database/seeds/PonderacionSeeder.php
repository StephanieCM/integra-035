<?php

use Illuminate\Database\Seeder;

class PonderacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '1',
        	'idPregunta' => '1',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '2',
        	'idPregunta' => '1',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '3',
        	'idPregunta' => '2',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '4',
        	'idPregunta' => '2',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '5',
        	'idPregunta' => '3',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '6',
        	'idPregunta' => '3',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '7',
        	'idPregunta' => '4',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '8',
        	'idPregunta' => '4',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '9',
        	'idPregunta' => '5',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '10',
        	'idPregunta' => '5',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '11',
        	'idPregunta' => '6',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '12',
        	'idPregunta' => '6',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '13',
        	'idPregunta' => '7',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '14',
        	'idPregunta' => '7',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '15',
        	'idPregunta' => '8',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '16',
        	'idPregunta' => '8',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '17',
        	'idPregunta' => '9',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '18',
        	'idPregunta' => '9',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
       DB::table('ponderacion')->insert([
        	'idPonderacion'=> '19',
        	'idPregunta' => '10',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '20',
        	'idPregunta' => '10',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '21',
        	'idPregunta' => '11',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '22',
        	'idPregunta' => '11',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '23',
        	'idPregunta' => '12',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '24',
        	'idPregunta' => '12',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '25',
        	'idPregunta' => '13',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '26',
        	'idPregunta' => '13',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '27',
        	'idPregunta' => '14',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '28',
        	'idPregunta' => '14',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 
                DB::table('ponderacion')->insert([
        	'idPonderacion'=> '29',
        	'idPregunta' => '15',
                'respuesta' => 'Si',
                'valor' => '1',
        ]);   
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> '30',
        	'idPregunta' => '15',
                'respuesta' => 'No',
                'valor' => '0',
        ]); 

       
        //ENRIQUE ENCUESTA 2
        $resInvertidas = ['Nunca','CasiNunca','AlgunasVeces','CasiSiempre','Siempre'];
        $resOrdenadas = ['Siempre','CasiSiempre','AlgunasVeces','CasiNunca','Nunca'];
        $ponderacion = 31;
        for($i=16;$i<=32;$i++){
                for($j=0;$j<5;$j++){
                        DB::table('ponderacion')->insert([
                                'idPonderacion'=> $ponderacion++,
                                'idPregunta' => $i,
                                'respuesta' => $resInvertidas[$j],
                                'valor' => $j,
                        ]); 
                }
        }
        for($i=33;$i<=48;$i++){
                for($j=0;$j<5;$j++){
                        DB::table('ponderacion')->insert([
                                'idPonderacion'=> $ponderacion++,
                                'idPregunta' => $i,
                                'respuesta' => $resOrdenadas[$j],
                                'valor' => $j,
                        ]); 
                }
        }
        for($i=49;$i<=61;$i++){
                for($j=0;$j<5;$j++){
                        DB::table('ponderacion')->insert([
                                'idPonderacion'=> $ponderacion++,
                                'idPregunta' => $i,
                                'respuesta' => $resInvertidas[$j],
                                'valor' => $j,
                        ]); 
                }
        }

        //STEF ENCUESTA 3
        //62 preg 1
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '62',
                'respuesta' => 'Siempre',
                'valor' => '0',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '62',
                'respuesta' => 'Casi siempre',
                'valor' => '1',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '62',
                'respuesta' => 'Alguna veces',
                'valor' => '2',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '62',
                'respuesta' => 'Casi nunca',
                'valor' => '3',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '62',
                'respuesta' => 'Nunca',
                'valor' => '4',
        ]); 
        //63 preg 2
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '63',
                'respuesta' => 'Siempre',
                'valor' => '4',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '63',
                'respuesta' => 'Casi siempre',
                'valor' => '3',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '63',
                'respuesta' => 'Alguna veces',
                'valor' => '2',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '63',
                'respuesta' => 'Casi nunca',
                'valor' => '1',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '63',
                'respuesta' => 'Nunca',
                'valor' => '0',
        ]); 
        //64 preg 3
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '64',
                'respuesta' => 'Siempre',
                'valor' => '4',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '64',
                'respuesta' => 'Casi siempre',
                'valor' => '3',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '64',
                'respuesta' => 'Alguna veces',
                'valor' => '2',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '64',
                'respuesta' => 'Casi nunca',
                'valor' => '1',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '64',
                'respuesta' => 'Nunca',
                'valor' => '0',
        ]);       
        //65 preg 4
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '65',
                'respuesta' => 'Siempre',
                'valor' => '0',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '65',
                'respuesta' => 'Casi siempre',
                'valor' => '1',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '65',
                'respuesta' => 'Alguna veces',
                'valor' => '2',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '65',
                'respuesta' => 'Casi nunca',
                'valor' => '3',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '65',
                'respuesta' => 'Nunca',
                'valor' => '4',
        ]);     
        // 5 a la 23
        //66 preg 5
        //83 preg 22 ordenadas del 4 al 0
        for($i=66;$i<=83;$i++){
            $v=4;
                for($j=0;$j<5;$j++){
                        DB::table('ponderacion')->insert([
                                'idPonderacion'=> $ponderacion++,
                                'idPregunta' => $i,
                                'respuesta' => $resOrdenadas[$j],
                                'valor' => $v,
                        ]); 
                        $v--;
                }
        }
        //84 preg 23 - 89 preg 28 respuestas 0 al 4
        for($i=84;$i<=89;$i++){
                for($j=0;$j<5;$j++){
                        DB::table('ponderacion')->insert([
                                'idPonderacion'=> $ponderacion++,
                                'idPregunta' => $i,
                                'respuesta' => $resOrdenadas[$j],
                                'valor' => $j,
                        ]);   
                }
        }
        //90 preg 29
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '90',
                'respuesta' => 'Siempre',
                'valor' => '4',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '90',
                'respuesta' => 'Casi siempre',
                'valor' => '3',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '90',
                'respuesta' => 'Alguna veces',
                'valor' => '2',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '90',
                'respuesta' => 'Casi nunca',
                'valor' => '1',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '90',
                'respuesta' => 'Nunca',
                'valor' => '1',
        ]);   
        //91 preg 30 - 114 preg 53 respuestas 0 al 4
        for($i=91;$i<=114;$i++){
                for($j=0;$j<5;$j++){
                        DB::table('ponderacion')->insert([
                                'idPonderacion'=> $ponderacion++,
                                'idPregunta' => $i,
                                'respuesta' => $resOrdenadas[$j],
                                'valor' => $j,
                        ]);   
                }
        }
        
        
        //115 preg 54
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '115',
                'respuesta' => 'Siempre',
                'valor' => '4',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '115',
                'respuesta' => 'Casi siempre',
                'valor' => '3',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '115',
                'respuesta' => 'Alguna veces',
                'valor' => '2',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '115',
                'respuesta' => 'Casi nunca',
                'valor' => '1',
        ]); 
        DB::table('ponderacion')->insert([
        	'idPonderacion'=> $ponderacion++,
        	'idPregunta' => '115',
                'respuesta' => 'Nunca',
                'valor' => '0',
        ]); 
        //116 preg 55 - 118 preg 57 respuestas 0 al 4
        for($i=116;$i<=118;$i++){
                for($j=0;$j<5;$j++){
                        DB::table('ponderacion')->insert([
                                'idPonderacion'=> $ponderacion++,
                                'idPregunta' => $i,
                                'respuesta' => $resOrdenadas[$j],
                                'valor' => $j,
                        ]);   
                }
        }
        //119 preg 58 - 133 preg 72 respuestas 4 al 0
         for($i=119;$i<=133;$i++){
            $v=4;
                for($j=0;$j<5;$j++){
                        DB::table('ponderacion')->insert([
                                'idPonderacion'=> $ponderacion++,
                                'idPregunta' => $i,
                                'respuesta' => $resOrdenadas[$j],
                                'valor' => $v,
                        ]); 
                        $v--;
                }
        }
    }
}
