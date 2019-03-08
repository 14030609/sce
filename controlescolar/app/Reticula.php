<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reticula extends Model
{
    protected $table='reticula';
    protected $guarded = ['cvemat','cveesp'];
    public $timestamps  = false;
}
