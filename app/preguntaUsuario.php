<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntaUsuario extends Model
{
    protected $table = 'preguntaUsuario';
    protected $primaryKey = 'idPreguntaUsuario';
    protected $fillable = [
        'idUsuario','idPregunta','idPonderacion','fecha'
    ];

    public function pregunta()
    {
        return $this->belongsTo('App\Pregunta','idPregunta','idPregunta');
    }

    public function ponderacion()
    {
        return $this->belongsTo('App\Ponderacion','idPonderacion','idPonderacion');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Usuario','idUsuario','idUsuario');
    }
}
