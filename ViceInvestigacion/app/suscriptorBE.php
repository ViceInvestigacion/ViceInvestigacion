<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suscriptorBE extends Model
{
    protected $table = 'suscriptorBE';
    public $timestamps = false;
    protected $fillable = ['nombres_Susc','apellidos_Susc','correo_Susc','estado_Susc','entidad_Susc','profesion_Susc'];
}

