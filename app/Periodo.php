<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $table = 'periodoEncuesta';
    protected $primaryKey = 'idPeriodo';
    protected $fillable = [
        'nombre','fechaInicio','fechaFin','estatus'
    ];
}
