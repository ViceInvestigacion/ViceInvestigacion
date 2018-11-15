<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticiaBE extends Model
{
    protected $table = 'noticiaBE';
    public $timestamps = false;
    protected $fillable = ['descripcion_Noticia','fecha_Noticia','estado_Noticia','imagen_Noticia','usuReg_Noticia','fecReg_Noticia'];
}
