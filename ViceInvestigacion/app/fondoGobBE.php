<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fondoGobBE extends Model
{
    protected $table = 'fondoGobBE';
    public $timestamps = false;
    protected $fillable = ['descripcion_fondoGob','estado_fondoGob'];
}
