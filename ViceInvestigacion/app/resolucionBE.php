<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resolucionBE extends Model
{
    protected $table = 'resolucionBE';
    public $timestamps = false;
    protected $fillable = ['descripcion_Resolucion','archivo_Resolucion','usuReg','fecReg'];
}
