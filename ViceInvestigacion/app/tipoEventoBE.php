<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoEventoBE extends Model
{
    protected $table = 'tipoEventoBE';
    public $timestamps = false;
    protected $fillable = ['descripcion_TipoEv','estado_TipoEv','fecReg_TipoEv','usuReg_TipoEv'];
}
