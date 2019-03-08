<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    protected $table='grupos';
    protected $fillable = ['cvemae', 'salon'];
    protected $guarded = ['cvemat','nogpo'];
    public $timestamps  = false;

}
