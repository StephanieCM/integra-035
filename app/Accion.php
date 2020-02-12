<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    protected $table = 'accion';
    protected $primaryKey = 'idAccion';
    protected $fillable = [
        'nombre', 'fecha'
    ];

    public function permisos()
    {
       return $this->belongsToMany('App\Rol','permiso','idAccion','idRole')->using('App\Permiso');
    }
}
