<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class convocatoriaBE extends Model
{
    protected $table = 'convocatoriaBE';
    public $timestamps = false;
    protected $fillable = ['descripcion_Conv','imagen_Conv','fecha_Conv','estado_Conv','usuReg_Conv','fecReg_Conv'];
}
