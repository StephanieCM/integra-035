<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ponderacion extends Model
{
    protected $table = 'ponderacion';
    protected $primaryKey = 'idPonderacion';
    protected $fillable = [
        'idPregunta','respuesta','valor'
    ];

    public function pregunta()
    {
        return $this->belongsTo('App\Pregunta','idPregunta','idPregunta');
    }

    public function preguntasUsuarios()
    {
        return $this->hasMany('App\PreguntaUsuario','idPonderacion','idPonderacion');
    }
}
