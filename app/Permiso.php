<?php

namespace App;

#use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Permiso extends Model
{
    #protected $primaryKey = 'idPermiso';

    protected $table = 'permiso';
    public $incrementing = false;
    protected $fillable = [
        'idMenu', 'idAccion','idRol'
    ];
}
