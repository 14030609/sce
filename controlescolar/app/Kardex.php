<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    protected $table='kardex';
    protected $fillable = ['calificacion'];
    protected $guarded = ['cvemat','nua','oportunidad'];
    public $timestamps  = false;

}
