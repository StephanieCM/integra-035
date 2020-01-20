<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    protected $table = 'dimension';
    protected $primaryKey = 'idDimension';
    protected $fillable = [
        'nombre'
    ];

    public function preguntas()
    {
        return $this->hasMany('App\Pregunta','idDimension','idDimension');
    }
}
