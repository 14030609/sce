<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    protected $table='materias';
    protected $fillable = ['nombre', 'creditos','horasprofesor','horasautonomo'];
    protected $guarded = ['cvemat'];
    public $timestamps  = false;
}
