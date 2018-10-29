<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyectoBE extends Model
{
    protected $table = 'proyectoBE';
    public $timestamps = false;
    protected $fillable = ['titulo_Proyecto','descripcion_Proyecto','presupuesto_Proyecto','enlace_Proyecto','usuReg','escuelaId_Proyecto','fecReg_Proyecto'];
}
