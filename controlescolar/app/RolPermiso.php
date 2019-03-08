<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolPermiso extends Model
{
    protected $table='rol_permiso';
    protected $guarded = ['id_rol','id_permiso'];
    public $timestamps  = false;
}
