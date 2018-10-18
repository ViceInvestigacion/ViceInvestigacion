<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asistenteBE extends Model
{
    protected $table = 'escuelaBE';
    public $timestamps = false;
    protected $fillable = ['nombre_Escuela','facultadId_Escuela'];
}
