<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosRol extends Model
{
       protected $table='usuarios_rol';
    protected $guarded = ['email','id_rol'];
    public $timestamps  = false;
}
