<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'pregunta';
    protected $primaryKey = 'idPregunta';
    protected $fillable = [
        'nombre','encuesta','estatus','folio','idCategoria','idDominio','idDimension'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','idCategoria','idCategoria');
    }

    public function dominio()
    {
        return $this->belongsTo('App\Dominio','idDominio','idDominio');
    }

    public function dimension()
    {
        return $this->belongsTo('App\Dimension','idDimension','idDimension');
    }

    public function ponderaciones()
    {
        return $this->hasMany('App\Ponderacion','idPregunta','idPregunta');
    }

    public function preguntasUsuarios()
    {
        return $this->hasMany('App\PreguntaUsuario','idPregunta','idPregunta');
    }
}
