<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventoAsistenteBE extends Model
{
    protected $table = 'escuelaBE';
    public $timestamps = false;
    protected $fillable = ['nombre_Escuela','facultadId_Escuela'];
}
