<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionTaller extends Model
{
    protected $table='inscipciontaller';
    protected $guarded = ['cvetaller','nua'];
    public $timestamps  = false;
}
