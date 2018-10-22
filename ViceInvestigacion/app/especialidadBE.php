<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialidadBE extends Model
{
    protected $table = 'especialidadBE';
    public $timestamps = false;
    protected $fillable = ['descripcion_Espe','estado_Espe'];
}
