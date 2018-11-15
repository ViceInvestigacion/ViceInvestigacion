<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ponenteBE extends Model
{
    protected $table = 'ponenteBE';
    public $timestamps = false;
    protected $fillable = ['nombre_Escuela','facultadId_Escuela'];
}
