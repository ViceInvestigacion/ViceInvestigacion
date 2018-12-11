<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nosotrosBE extends Model
{
    protected $table = 'nosotrosBE';
    public $timestamps = false;
    protected $fillable = ['descripcion_Nos','vision_Nos','mision_Nos','organigrama_Nos','directorio_Nos'];
}
