<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talleres extends Model
{
    protected $table='talleres';
    protected $fillable = ['nombre', 'instructor','horario','lugar','cupo','requisitos'];
    protected $guarded = ['cvetaller'];
    public $timestamps  = false;

}
