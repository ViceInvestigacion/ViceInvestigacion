<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventoBE extends Model
{
    protected $table = 'eventoBE';
    public $timestamps = false;
    protected $primaryKey = 'id_Evento';
    protected $fillable = ['nombre_Evento','descripcion_Evento','tipo_Evento','duracion_Evento','fecInicio_Evento','fecFin_Evento','horaInicio_Evento','horaFin_Evento','cstGSnCertificado_Evento','cstGCnCertificado_Evento','cstFCnCertificado_Evento','imagen_Evento','usuReg_Evento','fecReg_Evento'];
}
