<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listas extends Model
{
    protected $table='listas';
    protected $fillable = ['parcial1', 'parcial2','parcial2','parcial3'];
    protected $guarded = ['cvemat','nogpo','nua'];
    public $timestamps  = false;
}
