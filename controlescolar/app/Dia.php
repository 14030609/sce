<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    protected $table='dia';
    protected $fillable = ['dia'];
    protected $guarded = ['id_dia'];
    public $timestamps  = false;

}
