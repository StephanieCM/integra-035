<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'idCategoria';
    protected $fillable = [
        'nombre'
    ];

    public function preguntas()
    {
        return $this->hasMany('App\Pregunta','idCategoria','idCategoria');
    }
}
