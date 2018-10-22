<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profesionBE extends Model
{
    protected $table = 'profesionBE';
    public $timestamps = false;
    protected $fillable = ['nombre_Prof'];
}
