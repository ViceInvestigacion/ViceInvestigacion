<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accesoBE extends Model
{
    protected $table = 'accesoBE';
    public $timestamps = false;
    protected $fillable = ['descripcion_acc','estado_acc','id_Menu','id_Rol'];
  
}
