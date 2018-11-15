<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagoBE extends Model
{
    protected $table = 'pagoBE';
    public $timestamps = false;
    protected $fillable = ['imagen_Pago','eventoAsis_Pago','estado_Pago','usuApr_Pago','fecha_Pago','fechaApr_Pago'];
}
