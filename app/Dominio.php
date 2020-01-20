<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dominio extends Model
{
    protected $table = 'dominio';
    protected $primaryKey = 'idDominio';
    protected $fillable = [
        'nombre'
    ];

    public function preguntas()
    {
        return $this->hasMany('App\Pregunta','idDominio','idDominio');
    }
}
