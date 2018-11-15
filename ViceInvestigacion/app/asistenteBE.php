<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asistenteBE extends Model
{
    protected $table = 'asistenteBE';
    public $timestamps = false;
    protected $fillable = ['dni_Asis','nombres_Asis','apellidos_Asis','especialidad_Asis','universidadProc_Asis','fecNac_Asis','correo_Asis','telefono_Asis','fecReg_Asis','usuReg_Asis','tipoAsis_Asis'];
}
