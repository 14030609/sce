<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    protected $table='Oportunidad';
    protected $fillable = ['Descripcion'];
    protected $guarded = ['oportunidad'];
    public $timestamps  = false;
}
