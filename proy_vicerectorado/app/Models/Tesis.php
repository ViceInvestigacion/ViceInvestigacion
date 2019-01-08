<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tesis
 * @package App\Models
 * @version December 2, 2018, 9:46 pm UTC
 */
class Tesis extends Model
{
    use SoftDeletes;

    public $table = 'teses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tesis',
        'facultad',
        'escuela',
        'fecha'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tesis' => 'string',
        'facultad' => 'string',
        'escuela' => 'string',
        'fecha' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tesis' => 'required',
        'facultad' => 'required',
        'escuela' => 'required',
        'fecha' => 'required'
    ];

    
}
