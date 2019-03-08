a<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    protected $table='permisos';
    protected $fillable = ['permiso'];
    protected $guarded = ['id_permiso'];
    public $timestamps  = false;
}
