<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resultadoBE extends Model
{
    protected $table = 'resultadoBE';
    public $timestamps = false;
    protected $fillable = ['descripcion_Resultado','imagen_Resultado','concurso_Resultado','estado_Resultado','usuReg_Resultado','fecReg_Resultado'];
}

