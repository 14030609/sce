<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    protected $table='oportunidad';
    protected $fillable = ['descripcion'];
    protected $guarded = ['oportunidad'];
    public $timestamps  = false;
}
