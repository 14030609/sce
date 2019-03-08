<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table='horario';
    protected $fillable = ['horainicia', 'horatermina'];
    protected $guarded = ['id_dia','cvemat'];
    public $timestamps  = false;

}
