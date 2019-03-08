<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table='usuarios';
    protected $fillable = ['contrasenia'];
    protected $guarded = ['email'];
    public $timestamps  = false;
}
