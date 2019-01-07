<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suscriptorBE extends Model
{
    protected $table = 'suscriptorBE';
    public $timestamps = false;
    protected $primaryKey = 'id_Susc';
    protected $fillable = ['nombres_Susc','apellidos_Susc','correo_Susc'];
}

