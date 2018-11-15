<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventoAsistenteBE extends Model
{
    protected $table = 'eventoAsistenteBE';
    public $timestamps = false;
    protected $fillable = ['evento_EventoAsis','asistente_EventoAsis'];
}
